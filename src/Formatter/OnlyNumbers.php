<?php

declare(strict_types = 1);

namespace TiagoSampaio\Formatter;

/**
 * Class OnlyNumbers
 *
 * @package TiagoSampaio\Formatter
 */
class OnlyNumbers
{
    /**
     * @param string $value
     *
     * @return string
     */
    public static function format(string $value) : string
    {
        return preg_replace('/[^0-9]/is', '', $value);
    }
}
