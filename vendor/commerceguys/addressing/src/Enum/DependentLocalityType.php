<?php

namespace CommerceGuys\Addressing\Enum;

use CommerceGuys\Enum\AbstractEnum;

/**
 * Enumerates available dependent locality types.
 *
 * @codeCoverageIgnore
 */
final class DependentLocalityType extends AbstractEnum
{
    const DISTRICT = 'district';
    const NEIGHBORHOOD = 'neighborhood';
    const VILLAGE_TOWNSHIP = 'village_township';
    const SUBURB = 'suburb';

    /**
     * Gets the default value.
     *
     * @return string The default value.
     */
    public static function getDefault()
    {
        return static::SUBURB;
    }
}
