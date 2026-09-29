<?php

namespace Apriil\Workiva\Types;

use Apriil\Workiva\Attributes\Property;

/**
 * @property bool|null $hidden
 * @property int|null $size
 */
#[Property('hidden', 'bool')]
#[Property('size', 'integer')]
class ColumnMetadata extends Type
{
    //
}
