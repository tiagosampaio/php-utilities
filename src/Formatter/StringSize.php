<?php

declare(strict_types = 1);

namespace TiagoSampaio\Formatter;

/**
 * Class StringSize
 *
 * @package TiagoSampaio\Formatter
 */
class StringSize
{
    /**
     * @param string $value
     * @param int    $length
     * @param string $string
     * @param int    $type
     *
     * @return string
     */
    public static function format(string $value, int $length, string $string, int $type = STR_PAD_RIGHT) : string {
        return str_pad($value, $length, $string, $type);
    }
}
