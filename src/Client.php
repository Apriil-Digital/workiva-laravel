<?php

namespace Apriil\Workiva;

use Closure;

use Apriil\Workiva\Auth\ClientCredentials;
use Apriil\Workiva\Auth\OAuth2;
use Apriil\Workiva\Auth\Token;
use Apriil\Workiva\Enums\BaseURL;
use Apriil\Workiva\Enums\Endpoint;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Client
{
    protected OAuth2 $oauth2;
    protected Endpoint $endpoint = Endpoint::V1;
    protected Token|null $token = null;
    protected Closure $throwIf;

    public function __construct(protected ClientCredentials $credentials)
    {
        $this->oauth2 = OAuth2::make($this->credentials);
        $this->throwIf = fn(Response $response) => $response->failed();
    }

    public function throwIf(Closure $closure): self
    {
        $this->throwIf = $closure;
        return $this;
    }

    public function dontThrow(): self
    {
        $this->throwIf = fn() => false;
        return $this;
    }

    public function http(): PendingRequest
    {
        if ($this->token === null || $this->token->hasExpired()) {
            $this->token = $this->oauth2->getAccessToken();
        }

        return Http::baseUrl(
            $this->endpoint->forBaseURL(
                BaseURL::forRegion(
                    $this->credentials->getRegion()
                )
            )
        )
            ->withToken($this->token->getToken())
            ->withHeader('Content-Type', 'application/json;charset=UTF-8')
            ->throwIf($this->throwIf);
    }

    protected function buildQueryString(array $query): string
    {
        return collect($query)
            ->map(fn($value, $key) => is_int($key) ? $value : sprintf('%s=%s', $key, $value))
            ->implode('&');
    }

    public function get(string $uri, array $query = []): Response
    {
        return $this->http()
            ->get(sprintf('%s?%s', $uri, $this->buildQueryString($query)));
    }

    public function post(string $uri, mixed $data = null, array $query = []): Response
    {
        return $this->http()
            ->asJson()
            ->post(sprintf('%s?%s', $uri, $this->buildQueryString($query)), $data);
    }
}
