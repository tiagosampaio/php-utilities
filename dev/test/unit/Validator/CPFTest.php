<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Validator;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\Validator\CPF;

/**
 * Class CpfTest
 *
 * @package TiagoSampaioTest\Validator
 */
class CPFTest extends TestCase
{
    /**
     * @test
     */
    public function validateSuccess()
    {
        $this->assertTrue(CPF::validate('012.345.678-90'));
        $this->assertTrue(CPF::validate('01234567890'));
    }

    /**
     * @test
     */
    public function validateError()
    {
        $this->assertFalse(CPF::validate('000.345.678-90'));
        $this->assertFalse(CPF::validate('00034567890'));
    }
}
