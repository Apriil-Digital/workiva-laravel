<?php

namespace Apriil\Workiva\Contracts;

use Closure;

interface PropertySerialization
{
    public function getPropertySerializer(): Closure;
}
