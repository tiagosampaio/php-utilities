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
        for ($index = 0; $index < count($data); $index++) {
            $value = $data[$index];
            $delta = $index - 1;

            while ($delta >= 0 && $data[$delta] > $value) {
                $data[$delta + 1] = $data[$delta];
                $delta--;
            }

            $data[$delta + 1] = $value;
        }

        return $data;
    }
}
