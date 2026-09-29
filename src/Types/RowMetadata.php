<?php

namespace Apriil\Workiva\Types;

use Apriil\Workiva\Attributes\Property;

/**
 * @property bool|null $filtered
 * @property bool|null $hidden
 * @property int|null $size
 */
#[Property('filtered', 'bool')]
#[Property('hidden', 'bool')]
#[Property('size', 'integer')]
class RowMetadata extends Type
{
    //
}
