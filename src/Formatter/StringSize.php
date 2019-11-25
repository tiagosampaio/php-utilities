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
     * @param string      $value
     * @param int|null    $padLength
     * @param string|null $padString
     * @param int         $padType
     *
     * @return string
     */
    public static function format(
        string $value,
        int $padLength = null,
        string $padString = null,
        int $padType = STR_PAD_RIGHT
    ) : string {
        return str_pad($value, $padLength, $padString, $padType);
    }
}
