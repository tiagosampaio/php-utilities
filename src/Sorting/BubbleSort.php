<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class BubbleSort
 *
 * According to Wikipedia "Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm that
 * repeatedly steps through the list to be sorted, compares each pair of adjacent items and swaps them
 * if they are in the wrong order. The pass through the list is repeated until no swaps are needed,
 * which indicates that the list is sorted. The algorithm, which is a comparison sort,
 * is named for the way smaller elements "bubble" to the top of the list.
 * Although the algorithm is simple, it is too slow and impractical for most problems
 * even when compared to insertion sort. It can be practical if the input is usually in sort order
 * but may occasionally have some out-of-order elements nearly in position."
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-6.php
 * @package TiagoSampaio\Sorting
 */
class BubbleSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        do {
            $swapped = false;

            for ($index = 0, $count = count($data) - 1; $index < $count; $index++) {
                if ($data[$index] > $data[$index + 1]) {
                    list($data[$index + 1], $data[$index]) = array($data[$index], $data[$index + 1]);
                    $swapped = true;
                }
            }

        } while ($swapped);

        return $data;
    }
}
