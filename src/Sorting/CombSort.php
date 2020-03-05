<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class CombSort
 *
 * The Comb Sort is a variant of the Bubble Sort. Like the Shell sort, the Comb Sort increases the gap used
 * in comparisons and exchanges. Some implementations use the insertion sort once the gap is less than a certain
 * amount.
 * The basic idea is to eliminate turtles, or small values near the end of the list
 * since in a bubble sort these slow the sorting down tremendously. Rabbits,
 * large values around the beginning of the list, do not pose a problem in bubble sort.
 *
 * In bubble sort, when any two elements are compared, they always have a gap of 1.
 * The basic idea of comb sort is that the gap can be much more than 1.
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-6.php
 * @package TiagoSampaio\Sorting
 */
class CombSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        $gap = count($data);
        $swap = true;

        while ($gap > 1 || $swap) {
            if ($gap > 1) {
                $gap /= 1.25;
            }

            $swap = false;
            $index = 0;

            while ($index + $gap < count($data)) {
                if ($data[$index] > $data[$index + $gap]) {
                    list($data[$index], $data[$index + $gap]) = array($data[$index + $gap], $data[$index]);
                    $swap = true;
                }

                $index++;
            }
        }

        return $data;
    }
}
