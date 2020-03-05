<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class BogoSort
 *
 * In computer science, bogosort is a particularly ineffective sorting algorithm
 * based on the generate and test paradigm. The algorithm successively generates permutations of its input
 * until it finds one that is sorted. It is not useful for sorting but may be used for educational purposes,
 * to contrast it with other more realistic algorithms.
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-14.php
 * @package TiagoSampaio\Sorting
 */
class BogoSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        do {
            shuffle($data);
        } while (!self::isSorted($data));

        return $data;
    }

    /**
     * @param array $data
     *
     * @return bool
     */
    public static function isSorted(array $data) : bool
    {
        $count = count($data);

        for ($index = 1; $index < $count; $index++) {
            if ($data[$index - 1] > $data[$index]) {
                return false;
            }
        }

        return true;
    }
}
