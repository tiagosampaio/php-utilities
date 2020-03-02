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
     */
    public function getDayOfWeek()
    {
        $this->assertEquals(1, Week::getDayOfWeek($this->datetimeMon));
        $this->assertEquals(2, Week::getDayOfWeek($this->datetimeTue));
        $this->assertEquals(3, Week::getDayOfWeek($this->datetimeWed));
        $this->assertEquals(4, Week::getDayOfWeek($this->datetimeThu));
        $this->assertEquals(5, Week::getDayOfWeek($this->datetimeFri));
        $this->assertEquals(6, Week::getDayOfWeek($this->datetimeSat));
        $this->assertEquals(7, Week::getDayOfWeek($this->datetimeSun));
    }

    /**
     * @test
     */
    public function isMonday()
    {
        $this->assertEquals(true, Week::isMonday($this->datetimeMon));
        $this->assertEquals(false, Week::isMonday($this->datetimeTue));
    }

    /**
     * @test
     */
    public function isTuesday()
    {
        $this->assertEquals(true, Week::isTuesday($this->datetimeTue));
        $this->assertEquals(false, Week::isTuesday($this->datetimeWed));
    }

    /**
     * @test
     */
    public function isWednesday()
    {
        $this->assertEquals(true, Week::isWednesday($this->datetimeWed));
        $this->assertEquals(false, Week::isWednesday($this->datetimeThu));
    }

    /**
     * @test
     */
    public function isThursday()
    {
        $this->assertEquals(true, Week::isThursday($this->datetimeThu));
        $this->assertEquals(false, Week::isThursday($this->datetimeFri));
    }

    /**
     * @test
     */
    public function isFriday()
    {
        $this->assertEquals(true, Week::isFriday($this->datetimeFri));
        $this->assertEquals(false, Week::isFriday($this->datetimeSat));
    }

    /**
     * @test
     */
    public function isSaturday()
    {
        $this->assertEquals(true, Week::isSaturday($this->datetimeSat));
        $this->assertEquals(false, Week::isSaturday($this->datetimeSun));
    }

    /**
     * @test
     */
    public function isSunday()
    {
        $this->assertEquals(true, Week::isSunday($this->datetimeSun));
        $this->assertEquals(false, Week::isSunday($this->datetimeMon));
    }

    /**
     * @test
     */
    public function isWeekend()
    {
        $this->assertEquals(true, Week::isWeekend($this->datetimeSat));
        $this->assertEquals(true, Week::isWeekend($this->datetimeSun));
        $this->assertEquals(false, Week::isWeekend($this->datetimeMon));
        $this->assertEquals(false, Week::isWeekend($this->datetimeTue));
        $this->assertEquals(false, Week::isWeekend($this->datetimeWed));
        $this->assertEquals(false, Week::isWeekend($this->datetimeThu));
        $this->assertEquals(false, Week::isWeekend($this->datetimeFri));
    }

    /**
     * @test
     */
    public function isWeekday()
    {
        $this->assertEquals(false, Week::isWeekday($this->datetimeSat));
        $this->assertEquals(false, Week::isWeekday($this->datetimeSun));
        $this->assertEquals(true, Week::isWeekday($this->datetimeMon));
        $this->assertEquals(true, Week::isWeekday($this->datetimeTue));
        $this->assertEquals(true, Week::isWeekday($this->datetimeWed));
        $this->assertEquals(true, Week::isWeekday($this->datetimeThu));
        $this->assertEquals(true, Week::isWeekday($this->datetimeFri));
    }
}
