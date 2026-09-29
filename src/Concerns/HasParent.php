<?php

namespace Apriil\Workiva\Concerns;

use Apriil\Workiva\Types\Type;

trait HasParent
{
    protected ?Type $parent = null;

    public function getParent(): ?Type
    {
        return $this->parent;
    }

    public function setParent(Type $parent): void
    {
        $this->parent = $parent;
    }
}
