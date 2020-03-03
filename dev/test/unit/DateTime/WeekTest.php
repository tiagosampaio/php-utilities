<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\DateTime;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\DateTime\Week;

/**
 * Class Week
 *
 * @package TiagoSampaioTest\DateTime
 */
class WeekTest extends TestCase
{
    /**
     * @var string
     */
    private $datetimeMon = '2020-03-02';

    /**
     * @var string
     */
    private $datetimeTue = '2020-03-03';

    /**
     * @var string
     */
    private $datetimeWed = '2020-03-04';

    /**
     * @var string
     */
    private $datetimeThu = '2020-03-05';

    /**
     * @var string
     */
    private $datetimeFri = '2020-03-06';

    /**
     * @var string
     */
    private $datetimeSat = '2020-03-07';

    /**
     * @var string
     */
    private $datetimeSun = '2020-03-08';

    /**
     * @test
     * @throws \Exception
     */
    public function getDayOfWeek()
    {
        /** Monday */
        $this->assertEquals(1, Week::getDayOfWeek($this->datetimeMon));
        $this->assertEquals(1, Week::getDayOfWeek(strtotime($this->datetimeMon)));
        $this->assertEquals(1, Week::getDayOfWeek(new \DateTime($this->datetimeMon)));

        /** Tuesday */
        $this->assertEquals(2, Week::getDayOfWeek($this->datetimeTue));
        $this->assertEquals(2, Week::getDayOfWeek(strtotime($this->datetimeTue)));
        $this->assertEquals(2, Week::getDayOfWeek(new \DateTime($this->datetimeTue)));

        /** Wednesday */
        $this->assertEquals(3, Week::getDayOfWeek($this->datetimeWed));
        $this->assertEquals(3, Week::getDayOfWeek(strtotime($this->datetimeWed)));
        $this->assertEquals(3, Week::getDayOfWeek(new \DateTime($this->datetimeWed)));

        /** Thursday */
        $this->assertEquals(4, Week::getDayOfWeek($this->datetimeThu));
        $this->assertEquals(4, Week::getDayOfWeek(strtotime($this->datetimeThu)));
        $this->assertEquals(4, Week::getDayOfWeek(new \DateTime($this->datetimeThu)));

        /** Friday */
        $this->assertEquals(5, Week::getDayOfWeek($this->datetimeFri));
        $this->assertEquals(5, Week::getDayOfWeek(strtotime($this->datetimeFri)));
        $this->assertEquals(5, Week::getDayOfWeek(new \DateTime($this->datetimeFri)));

        /** Saturday */
        $this->assertEquals(6, Week::getDayOfWeek($this->datetimeSat));
        $this->assertEquals(6, Week::getDayOfWeek(strtotime($this->datetimeSat)));
        $this->assertEquals(6, Week::getDayOfWeek(new \DateTime($this->datetimeSat)));

        /** Sunday */
        $this->assertEquals(7, Week::getDayOfWeek($this->datetimeSun));
        $this->assertEquals(7, Week::getDayOfWeek(strtotime($this->datetimeSun)));
        $this->assertEquals(7, Week::getDayOfWeek(new \DateTime($this->datetimeSun)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isMonday()
    {
        $this->assertEquals(true, Week::isMonday($this->datetimeMon));
        $this->assertEquals(true, Week::isMonday(strtotime($this->datetimeMon)));
        $this->assertEquals(true, Week::isMonday(new \DateTime($this->datetimeMon)));
        $this->assertEquals(false, Week::isMonday($this->datetimeTue));
        $this->assertEquals(false, Week::isMonday(strtotime($this->datetimeTue)));
        $this->assertEquals(false, Week::isMonday(new \DateTime($this->datetimeTue)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isTuesday()
    {
        $this->assertEquals(true, Week::isTuesday($this->datetimeTue));
        $this->assertEquals(true, Week::isTuesday(strtotime($this->datetimeTue)));
        $this->assertEquals(true, Week::isTuesday(new \DateTime($this->datetimeTue)));
        $this->assertEquals(false, Week::isTuesday($this->datetimeWed));
        $this->assertEquals(false, Week::isTuesday(strtotime($this->datetimeWed)));
        $this->assertEquals(false, Week::isTuesday(new \DateTime($this->datetimeWed)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isWednesday()
    {
        $this->assertEquals(true, Week::isWednesday($this->datetimeWed));
        $this->assertEquals(true, Week::isWednesday(strtotime($this->datetimeWed)));
        $this->assertEquals(true, Week::isWednesday(new \DateTime($this->datetimeWed)));
        $this->assertEquals(false, Week::isWednesday($this->datetimeThu));
        $this->assertEquals(false, Week::isWednesday(strtotime($this->datetimeThu)));
        $this->assertEquals(false, Week::isWednesday(new \DateTime($this->datetimeThu)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isThursday()
    {
        $this->assertEquals(true, Week::isThursday($this->datetimeThu));
        $this->assertEquals(true, Week::isThursday(strtotime($this->datetimeThu)));
        $this->assertEquals(true, Week::isThursday(new \DateTime($this->datetimeThu)));
        $this->assertEquals(false, Week::isThursday($this->datetimeFri));
        $this->assertEquals(false, Week::isThursday(strtotime($this->datetimeFri)));
        $this->assertEquals(false, Week::isThursday(new \DateTime($this->datetimeFri)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isFriday()
    {
        $this->assertEquals(true, Week::isFriday($this->datetimeFri));
        $this->assertEquals(true, Week::isFriday(strtotime($this->datetimeFri)));
        $this->assertEquals(true, Week::isFriday(new \DateTime($this->datetimeFri)));
        $this->assertEquals(false, Week::isFriday($this->datetimeSat));
        $this->assertEquals(false, Week::isFriday(strtotime($this->datetimeSat)));
        $this->assertEquals(false, Week::isFriday(new \DateTime($this->datetimeSat)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isSaturday()
    {
        $this->assertEquals(true, Week::isSaturday($this->datetimeSat));
        $this->assertEquals(true, Week::isSaturday(strtotime($this->datetimeSat)));
        $this->assertEquals(true, Week::isSaturday(new \DateTime($this->datetimeSat)));
        $this->assertEquals(false, Week::isSaturday($this->datetimeSun));
        $this->assertEquals(false, Week::isSaturday(strtotime($this->datetimeSun)));
        $this->assertEquals(false, Week::isSaturday(new \DateTime($this->datetimeSun)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isSunday()
    {
        $this->assertEquals(true, Week::isSunday($this->datetimeSun));
        $this->assertEquals(true, Week::isSunday(strtotime($this->datetimeSun)));
        $this->assertEquals(true, Week::isSunday(new \DateTime($this->datetimeSun)));
        $this->assertEquals(false, Week::isSunday($this->datetimeMon));
        $this->assertEquals(false, Week::isSunday(strtotime($this->datetimeMon)));
        $this->assertEquals(false, Week::isSunday(new \DateTime($this->datetimeMon)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isWeekend()
    {
        /** Saturday */
        $this->assertEquals(true, Week::isWeekend($this->datetimeSat));
        $this->assertEquals(true, Week::isWeekend(strtotime($this->datetimeSat)));
        $this->assertEquals(true, Week::isWeekend(new \DateTime($this->datetimeSat)));

        /** Sunday */
        $this->assertEquals(true, Week::isWeekend($this->datetimeSun));
        $this->assertEquals(true, Week::isWeekend(strtotime($this->datetimeSun)));
        $this->assertEquals(true, Week::isWeekend(new \DateTime($this->datetimeSun)));

        /** Monday */
        $this->assertEquals(false, Week::isWeekend($this->datetimeMon));
        $this->assertEquals(false, Week::isWeekend(strtotime($this->datetimeMon)));
        $this->assertEquals(false, Week::isWeekend(new \DateTime($this->datetimeMon)));

        /** Tuesday */
        $this->assertEquals(false, Week::isWeekend($this->datetimeTue));
        $this->assertEquals(false, Week::isWeekend(strtotime($this->datetimeTue)));
        $this->assertEquals(false, Week::isWeekend(new \DateTime($this->datetimeTue)));

        /** Wednesday */
        $this->assertEquals(false, Week::isWeekend($this->datetimeWed));
        $this->assertEquals(false, Week::isWeekend(strtotime($this->datetimeWed)));
        $this->assertEquals(false, Week::isWeekend(new \DateTime($this->datetimeWed)));

        /** Thursday */
        $this->assertEquals(false, Week::isWeekend($this->datetimeThu));
        $this->assertEquals(false, Week::isWeekend(strtotime($this->datetimeThu)));
        $this->assertEquals(false, Week::isWeekend(new \DateTime($this->datetimeThu)));

        /** Friday */
        $this->assertEquals(false, Week::isWeekend($this->datetimeFri));
        $this->assertEquals(false, Week::isWeekend(strtotime($this->datetimeFri)));
        $this->assertEquals(false, Week::isWeekend(new \DateTime($this->datetimeFri)));
    }

    /**
     * @test
     * @throws \Exception
     */
    public function isWeekday()
    {
        /** Saturday */
        $this->assertEquals(false, Week::isWeekday($this->datetimeSat));
        $this->assertEquals(false, Week::isWeekday(strtotime($this->datetimeSat)));
        $this->assertEquals(false, Week::isWeekday(new \DateTime($this->datetimeSat)));

        /** Sunday */
        $this->assertEquals(false, Week::isWeekday($this->datetimeSun));
        $this->assertEquals(false, Week::isWeekday(strtotime($this->datetimeSun)));
        $this->assertEquals(false, Week::isWeekday(new \DateTime($this->datetimeSun)));

        /** Monday */
        $this->assertEquals(true, Week::isWeekday($this->datetimeMon));
        $this->assertEquals(true, Week::isWeekday(strtotime($this->datetimeMon)));
        $this->assertEquals(true, Week::isWeekday(new \DateTime($this->datetimeMon)));

        /** Tuesday */
        $this->assertEquals(true, Week::isWeekday($this->datetimeTue));
        $this->assertEquals(true, Week::isWeekday(strtotime($this->datetimeTue)));
        $this->assertEquals(true, Week::isWeekday(new \DateTime($this->datetimeTue)));

        /** Wednesday */
        $this->assertEquals(true, Week::isWeekday($this->datetimeWed));
        $this->assertEquals(true, Week::isWeekday(strtotime($this->datetimeWed)));
        $this->assertEquals(true, Week::isWeekday(new \DateTime($this->datetimeWed)));

        /** Thursday */
        $this->assertEquals(true, Week::isWeekday($this->datetimeThu));
        $this->assertEquals(true, Week::isWeekday(strtotime($this->datetimeThu)));
        $this->assertEquals(true, Week::isWeekday(new \DateTime($this->datetimeThu)));

        /** Friday */
        $this->assertEquals(true, Week::isWeekday($this->datetimeFri));
        $this->assertEquals(true, Week::isWeekday(strtotime($this->datetimeFri)));
        $this->assertEquals(true, Week::isWeekday(new \DateTime($this->datetimeFri)));
    }
}
