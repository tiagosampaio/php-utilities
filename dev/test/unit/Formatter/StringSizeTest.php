<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Formatter;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\Formatter\StringSize;

/**
 * Class StringSizeTest
 *
 * @package TiagoSampaioTest\Formatter
 */
class StringSizeTest extends TestCase
{
    /**
     * @test
     */
    public function format()
    {
        $this->assertEquals('000000001', StringSize::format('1', 9, '0', STR_PAD_LEFT));
        $this->assertEquals('100000000', StringSize::format('1', 9, '0', STR_PAD_RIGHT));
        $this->assertEquals('000010000', StringSize::format('1', 9, '0', STR_PAD_BOTH));
        $this->assertEquals('    1    ', StringSize::format('1', 9, ' ', STR_PAD_BOTH));
    }
}
