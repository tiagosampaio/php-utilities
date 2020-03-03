<?php

declare(strict_types = 1);

namespace TiagoSampaio\Validator;

use TiagoSampaio\Formatter\OnlyNumbers;
use TiagoSampaio\Formatter\StringSize;

/**
 * Class CNPJ
 *
 * @package TiagoSampaio\Validator
 */
class CNPJ
{
    /**
     * @var int
     */
    const MAX_LENGTH = 14;

    /**
     * @var string
     */
    const PAD_STRING = '0';

    /**
     * @param string $cpf
     *
     * @return bool
     */
    public static function validate(string $cnpj) : bool
    {
        $cnpj = self::clean($cnpj);

        if (!self::baseValidation($cnpj) || !self::validateAlgorithm($cnpj)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $cpf
     *
     * @return bool
     */
    private static function baseValidation(string $cnpj) : bool
    {
        /**
         * CPF number cannot have more than 11 numbers.
         */
        if (strlen($cnpj) > self::MAX_LENGTH) {
            return false;
        }

        /**
         * Check if the numbers are repeated. E.g.: 99.999.999/9999-99
         */
        if (preg_match('/(\d)\1{13}/', $cnpj)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $cpf
     *
     * @return bool
     */
    private static function validateAlgorithm(string $cnpj) : bool
    {
        /**
         * Validate the first verifier digit.
         */
        for ($i = 0, $j = 5, $sum = 0; $i < 12; $i++) {
            $sum += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $rest = $sum % 11;

        if ($cnpj[12] != ($rest < 2 ? 0 : 11 - $rest)) {
            return false;
        }

        /**
         * Validate the second verifier digit.
         */
        for ($i = 0, $j = 6, $sum = 0; $i < 13; $i++) {
            $sum += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $rest = $sum % 11;

        return $cnpj[13] == ($rest < 2 ? 0 : 11 - $rest);
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
