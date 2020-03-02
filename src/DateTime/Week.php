<?php

declare(strict_types = 1);

namespace TiagoSampaio\DateTime;

/**
 * Class Weekend
 *
 * @package TiagoSampaio\DateTime
 */
class Week extends DateTimeAbstract
{
    /**
     * @var int
     */
    const DAY_OF_WEEK_MONDAY = 1;

    /**
     * @var int
     */
    const DAY_OF_WEEK_TUESDAY = 2;

    /**
     * @var int
     */
    const DAY_OF_WEEK_WEDNESDAY = 3;

    /**
     * @var int
     */
    const DAY_OF_WEEK_THURSDAY = 4;

    /**
     * @var int
     */
    const DAY_OF_WEEK_FRIDAY = 5;

    /**
     * @var int
     */
    const DAY_OF_WEEK_SATURDAY = 6;

    /**
     * @var int
     */
    const DAY_OF_WEEK_SUNDAY = 7;

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isWeekend($datetime = null)
    {
        return (self::getDayOfWeek($datetime) >= 6);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isWeekday($datetime = null)
    {
        return !self::isWeekend($datetime);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isMonday($datetime = null)
    {
        return (self::getDayOfWeek($datetime) == self::DAY_OF_WEEK_MONDAY);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isTuesday($datetime = null)
    {
        return (self::getDayOfWeek($datetime) == self::DAY_OF_WEEK_TUESDAY);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isWednesday($datetime = null)
    {
        return (self::getDayOfWeek($datetime) == self::DAY_OF_WEEK_WEDNESDAY);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isThursday($datetime = null)
    {
        return (self::getDayOfWeek($datetime) == self::DAY_OF_WEEK_THURSDAY);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isFriday($datetime = null)
    {
        return (self::getDayOfWeek($datetime) == self::DAY_OF_WEEK_FRIDAY);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isSaturday($datetime = null)
    {
        return (self::getDayOfWeek($datetime) == self::DAY_OF_WEEK_SATURDAY);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return bool
     */
    public static function isSunday($datetime = null)
    {
        return (self::getDayOfWeek($datetime) == self::DAY_OF_WEEK_SUNDAY);
    }

    /**
     * @param null|string|int|\DateTime $datetime
     *
     * @return false|string
     */
    public static function getDayOfWeek($datetime = null)
    {
        return date('N', self::getDatetime($datetime));
    }
}
