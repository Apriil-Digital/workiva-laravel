<?php

namespace Apriil\Workiva\Types;

use Apriil\Workiva\Attributes\Property;
use Carbon\CarbonImmutable;

#[Property('dateTime', CarbonImmutable::class)]
#[Property('user', User::class)]
class Action extends Type
{
    //
}
