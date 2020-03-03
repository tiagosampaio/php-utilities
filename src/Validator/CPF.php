<?php

declare(strict_types = 1);

namespace TiagoSampaio\Validator;

use TiagoSampaio\Formatter\OnlyNumbers;
use TiagoSampaio\Formatter\StringSize;

/**
 * Class Cpf
 *
 * @package TiagoSampaio\Validator
 */
class CPF
{
    /**
     * @var int
     */
    const MAX_LENGTH = 11;

    /**
     * @var string
     */
    const PAD_STRING = '0';

    /**
     * @param string $cpf
     *
     * @return bool
     */
    public static function validate(string $cpf) : bool
    {
        $cpf = self::clean($cpf);

        if (!self::baseValidation($cpf) || !self::validateAlgorithm($cpf)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $cpf
     *
     * @return bool
     */
    private static function baseValidation(string $cpf) : bool
    {
        /**
         * CPF number cannot have more than 11 numbers.
         */
        if (strlen($cpf) > self::MAX_LENGTH) {
            return false;
        }

        /**
         * Check if the numbers are repeated. E.g.: 999.999.999-99
         */
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $cpf
     *
     * @return bool
     */
    private static function validateAlgorithm(string $cpf) : bool
    {
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param string $value
     *
     * @return string
     */
    private static function clean(string $value) : string
    {
        $value = OnlyNumbers::format($value);
        $value = StringSize::format($value, self::MAX_LENGTH, self::PAD_STRING, STR_PAD_LEFT);

        return $value;
    }
}
