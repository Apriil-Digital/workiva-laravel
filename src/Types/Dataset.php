<?php

namespace Apriil\Workiva\Types;

use Apriil\Workiva\Attributes\Property;
use Apriil\Workiva\Concerns\HasParent;

/**
 * @property string|null $range
 * @property string|null $sheet
 * @property array|null $values
 */
#[Property('range', 'string')]
#[Property('sheet', 'string')]
#[Property('values', 'array')]
class Dataset extends Type
{
    use HasParent;
}
