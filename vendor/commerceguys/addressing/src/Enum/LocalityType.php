<?php

namespace CommerceGuys\Addressing\Enum;

use CommerceGuys\Enum\AbstractEnum;

/**
 * Enumerates available locality types.
 *
 * @codeCoverageIgnore
 */
final class LocalityType extends AbstractEnum
{
    const CITY = 'city';
    const DISTRICT = 'district';
    const POST_TOWN = 'post_town';

    /**
     * Gets the default value.
     *
     * @return string The default value.
     */
    public static function getDefault()
    {
        return static::CITY;
    }
}
