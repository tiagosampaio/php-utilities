<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Formatter;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\Formatter\OnlyNumbers;

/**
 * Class OnlyNumbers
 *
 * @package TiagoSampaioTest\Formatter
 */
class OnlyNumbersTest extends TestCase
{
    /**
     * @test
     */
    public function format()
    {
        $text = ' !1@2#3$4%5ˆ&6*7(8)9_0abcde ';
        $this->assertEquals(1234567890, OnlyNumbers::format($text));
    }
}
