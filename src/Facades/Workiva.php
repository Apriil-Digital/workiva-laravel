<?php

namespace Apriil\Workiva\Facades;

use Illuminate\Support\Facades\Facade;
use Apriil\Workiva\Client;

/**
 * @method static \Illuminate\Http\Client\Response get(string $uri, array $query = [])
 * @method static \Illuminate\Http\Client\Response post(string $uri, mixed $data = null, array $query = [])
 * @method static \Apriil\Workiva\Client throwIf(\Closure $closure)
 * @method static \Apriil\Workiva\Client dontThrow()
 * @method static \Illuminate\Http\Client\PendingRequest http()
 * @package Apriil\Workiva\Facades
 * @see \Apriil\Workiva\Client
 */
class Workiva extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Client::class;
    }
}
