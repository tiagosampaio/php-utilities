<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Strings;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\Strings\Strings;

/**
 * Class StringsTest
 *
 * @package TiagoSampaioTest\Strings
 */
class StringsTest extends TestCase
{
    /**
     * @test
     */
    public function startsWith()
    {
        $this->assertEquals(true, Strings::startsWith('Hey Jack!', 'Hey'));
        $this->assertEquals(false, Strings::startsWith('Hey Jack!', 'Jack'));
    }

    /**
     * @test
     */
    public function endsWith()
    {
        $this->assertEquals(false, Strings::endsWith('Hey Jack!', 'Hey'));
        $this->assertEquals(true, Strings::endsWith('Hey Jack!', 'Jack!'));
    }

    /**
     * @test
     */
    public function testContains()
    {
        $this->assertEquals(true, Strings::contains('Hey Jack!', 'Hey'));
        $this->assertEquals(true, Strings::contains('Hey Jack!', 'Jack'));
        $this->assertEquals(false, Strings::contains('Hey Jack!', 'Mommy'));
    }
}
