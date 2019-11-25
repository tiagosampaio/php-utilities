<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Validator;

use PHPUnit\Framework\TestCase;
use TiagoSampaio\Validator\CNPJ;

/**
 * Class CNPJTest
 *
 * @package TiagoSampaioTest\Validator
 */
class CNPJTest extends TestCase
{
    /**
     * @test
     */
    public function validateSuccess()
    {
        $this->assertTrue(CNPJ::validate('83.111.918/0001-35'));
        $this->assertTrue(CNPJ::validate('83111918000135'));
    }

    /**
     * @test
     */
    public function validateError()
    {
        $this->assertFalse(CNPJ::validate('000.345.678-90'));
        $this->assertFalse(CNPJ::validate('00034567890'));
    }
}
