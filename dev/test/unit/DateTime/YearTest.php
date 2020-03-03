<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\DateTime;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\DateTime\Year;
use DateTime;

/**
 * Class YearTest
 *
 * @package TiagoSampaioTest\DateTime
 */
class YearTest extends TestCase
{
    /**
     * @test
     */
    public function isLeapYear()
    {
        $this->assertEquals(true, Year::isLeapYear('2020-01-01'));
        $this->assertEquals(true, Year::isLeapYear(strtotime('2016-01-01')));
        $this->assertEquals(true, Year::isLeapYear(new DateTime('2012-01-01')));
        $this->assertEquals(false, Year::isLeapYear('2019-01-01'));
        $this->assertEquals(false, Year::isLeapYear(strtotime('2018-01-01')));
        $this->assertEquals(false, Year::isLeapYear(new DateTime('2017-01-01')));
    }
}
