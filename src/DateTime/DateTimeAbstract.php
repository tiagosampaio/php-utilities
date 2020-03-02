<?php

declare(strict_types = 1);

namespace TiagoSampaio\DateTime;

/**
 * Class DateTimeAbstract
 *
 * @package TiagoSampaio\DateTime
 */
class DateTimeAbstract
{
    /**
     * @var string
     */
    const DEFAULT_FORMAT = 'Y-m-d H:i:s';

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return int|null
     */
    protected static function getDatetime($datetime = null)
    {
        if (null === $datetime) {
            return self::getCurrentTimestamp();
        }

        if ($datetime instanceof \DateTime) {
            $datetime = (string) $datetime->format(self::DEFAULT_FORMAT);
        }

        $datetime = strtotime($datetime);

        return $datetime;
    }

    /**
     * @return int
     */
    protected static function getCurrentTimestamp()
    {
        return time();
    }
}
