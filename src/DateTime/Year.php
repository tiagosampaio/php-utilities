<?php

declare(strict_types = 1);

namespace TiagoSampaio\DateTime;

/**
 * Class Year
 *
 * @package TiagoSampaio\DateTime
 */
class Year extends DateTimeAbstract
{
    /**
     * When a full year has 366 days.
     *
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isLeapYear($datetime = null)
    {
        $year = (int) date('Y', self::getDatetime($datetime));
        return self::checkLeapYear($year);
    }

    /**
     * @param int $year
     *
     * @return bool
     */
    private static function checkLeapYear($year)
    {
        /**
         * Another way of calculate this.
         *
         * $february = mktime(0, 0, 0, 2, 1, $year);
         * $daysCount = date('t', $february);
         *
         * return ($daysCount == 29);
         */

        /**
         * First check if the year is divisible by 4 and not by 100.
         */
        if (($year % 4 == 0) && ($year % 100 != 0)) {
            return true;
        }

        /**
         * Or if the year is divisible by 400.
         */
        if ($year % 400 == 0) {
            return true;
        }

        return false;
    }
}
