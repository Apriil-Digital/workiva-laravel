<?php

namespace Apriil\Workiva\Types;

use Apriil\Workiva\Attributes\Property;

/**
 * @property int|null $startColumn
 * @property int|null $startRow
 * @property int|null $stopColumn
 * @property int|null $stopRow
 */
#[Property('startColumn', 'int')]
#[Property('startRow', 'int')]
#[Property('stopColumn', 'int')]
#[Property('stopRow', 'int')]
class Range extends Type
{
    //
}
