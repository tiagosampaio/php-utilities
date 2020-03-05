<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class RadixSort
 *
 * @see     https://www.geeksforgeeks.org/radix-sort/
 * @package TiagoSampaio\Sorting
 */
class RadixSort
{
    /**
     * @param array $data
     * @param int   $count
     *
     * @return array
     */
    public static function sort(array $data, int $count) : array
    {
        // Find the maximum number to know
        // number of digits
        $m = max($data);

        // Do counting sort for every digit. Note
        // that instead of passing digit number,
        // exp is passed. exp is 10^i where i is
        // current digit number
        for ($exp = 1; $m / $exp > 0; $exp *= 10) {
            $data = self::countSort($data, $count, $exp);
        }

        return $data;
    }

    /**
     * @param array $data
     * @param int   $number
     * @param int   $exp
     *
     * @return array
     */
    public static function countSort(array $data, int $number, float $exp) : array
    {
        $output = array_fill(0, $number, 0); // output array
        $count = array_fill(0, 10, 0);

        // Store count of occurrences in count[]
        for ($index = 0; $index < $number; $index++) {
            $count[($data[$index] / $exp) % 10]++;
        }

        // Change count[i] so that count[i]
        // now contains actual position of
        // this digit in output[]
        for ($index = 1; $index < 10; $index++) {
            $count[$index] += $count[$index - 1];
        }

        // Build the output array
        for ($index = $number - 1; $index >= 0; $index--) {
            $output[$count[ ($data[$index] / $exp) % 10 ] - 1] = $data[$index];
            $count[ ($data[$index] / $exp) % 10 ]--;
        }

        // Copy the output array to arr[], so
        // that arr[] now contains sorted numbers
        // according to current digit
        for ($index = 0; $index < $number; $index++) {
            $data[$index] = $output[$index];
        }

        return $data;
    }
}
