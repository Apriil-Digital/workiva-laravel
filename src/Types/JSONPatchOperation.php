<?php

namespace Apriil\Workiva\Types;

use Apriil\Workiva\Attributes\Property;
use Apriil\Workiva\Enums\PatchOperation;

/**
 * @property string|null $from
 * @property PatchOperation|null $op
 * @property string|null $path
 * @property mixed $value
 */
#[Property('from', 'string')]
#[Property('op', PatchOperation::class)]
#[Property('path', 'string')]
#[Property('value', 'mixed')]
class JSONPatchOperation extends Type
{
    //
}
