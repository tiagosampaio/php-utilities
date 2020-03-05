<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class RadixSort
 *
 * @see https://www.geeksforgeeks.org/radix-sort/
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
     * @param int   $n
     * @param int   $exp
     *
     * @return array
     */
    public static function countSort(array $data, int $n, float $exp) : array
    {
        $output = array_fill(0, $n, 0); // output array
        $count = array_fill(0, 10, 0);

        // Store count of occurrences in count[]
        for ($i = 0; $i < $n; $i++) {
            $count[($data[$i] / $exp) % 10]++;
        }

        // Change count[i] so that count[i]
        // now contains actual position of
        // this digit in output[]
        for ($i = 1; $i < 10; $i++) {
            $count[$i] += $count[$i - 1];
        }

        // Build the output array
        for ($i = $n - 1; $i >= 0; $i--) {
            $output[$count[ ($data[$i] /
                $exp) % 10 ] - 1] = $data[$i];
            $count[ ($data[$i] / $exp) % 10 ]--;
        }

        // Copy the output array to arr[], so
        // that arr[] now contains sorted numbers
        // according to current digit
        for ($i = 0; $i < $n; $i++) {
            $data[$i] = $output[$i];
        }

        return $data;
    }
}
