<?php

declare(strict_types = 1);

namespace TiagoSampaio\Formatter;

/**
 * Class Postcode
 */
class Postcode
{
    /**
     * @var int
     */
    const MAX_LENGTH = 8;

    /**
     * @param string $postcode
     *
     * @return string|string[]|null
     */
    public static function format(string $postcode) : string
    {
        $postcode = OnlyNumbers::format($postcode);
        $postcode = StringSize::format($postcode, self::MAX_LENGTH, '0', STR_PAD_LEFT);

        return $postcode;
    }
}
