<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\DateTime;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\DateTime\Year;

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
        $this->assertEquals(true, Year::isLeapYear('2016-01-01'));
        $this->assertEquals(true, Year::isLeapYear('2012-01-01'));
        $this->assertEquals(false, Year::isLeapYear('2019-01-01'));
        $this->assertEquals(false, Year::isLeapYear('2018-01-01'));
        $this->assertEquals(false, Year::isLeapYear('2017-01-01'));
    }
}
