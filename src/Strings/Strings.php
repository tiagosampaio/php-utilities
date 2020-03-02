<?php

declare(strict_types = 1);

namespace TiagoSampaio\Strings;

/**
 * Class Strings
 *
 * @package TiagoSampaio\Strings
 */
class Strings
{
    /**
     * Starts the $haystack string with the prefix $needle?
     *
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    public static function startsWith(string $haystack, string $needle) : bool
    {
        return strncmp($haystack, $needle, strlen($needle)) === 0;
    }

    /**
     * Ends the $haystack string with the suffix $needle?
     *
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    public static function endsWith(string $haystack, string $needle) : bool
    {
        return strlen($needle) === 0 || substr($haystack, -strlen($needle)) === $needle;
    }

    /**
     * Does $haystack contain $needle?
     *
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    public static function contains(string $haystack, string $needle) : bool
    {
        return strpos($haystack, $needle) !== false;
    }
}
