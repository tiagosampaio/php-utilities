<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Formatter;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\Formatter\Postcode;

/**
 * Class PostcodeTest
 *
 * @package TiagoSampaioTest\Formatter
 */
class PostcodeTest extends TestCase
{
    /**
     * @test
     */
    public function format()
    {
        $this->assertEquals('06395-000', Postcode::format('6395-000'));
        $this->assertEquals('06395-000', Postcode::format('xxx 000 6395-000 yzk'));
    }

    /**
     * @test
     */
    public function normalize()
    {
        $this->assertEquals('06395000', Postcode::normalize('6395-000'));
        $this->assertEquals('06395000', Postcode::normalize('xxx 000 6395-000 yzk'));
    }
}
