<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class InsertionSort
 *
 * Insertion sort is a simple sorting algorithm that builds the final sorted array (or list) one item at a time.
 * It is much less efficient on large lists than more advanced algorithms such as quicksort, heapsort, or merge sort.
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-3.php
 * @package TiagoSampaio\Sorting
 */
class InsertionSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        for ($i = 0; $i < count($data); $i++) {
            $val = $data[$i];
            $j = $i - 1;

            while ($j >= 0 && $data[$j] > $val) {
                $data[$j + 1] = $data[$j];
                $j--;
            }

            $data[$j + 1] = $val;
        }

        return $data;
    }
}
