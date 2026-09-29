<?php

namespace Apriil\Workiva\Types;

use Apriil\Workiva\Attributes\Property;
use Apriil\Workiva\Enums\XlsxPrecision;

/**
 * @property bool|null $exportAsFormulas
 * @property XlsxPrecision|null $exportPrecision
 */
#[Property('exportAsFormulas', 'bool', nullable: false)]
#[Property('exportPrecision', XlsxPrecision::class, default: XlsxPrecision::Full, nullable: false)]
class XlsxOptions extends Type
{
    //
}
