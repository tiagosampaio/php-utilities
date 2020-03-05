<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class SelectionSort
 *
 * The selection sort improves on the bubble sort by making only one exchange for every pass through the list.
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-4.php
 * @package TiagoSampaio\Sorting
 */
class SelectionSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        for ($index = 0; $index < count($data) - 1; $index++) {
            $min = $index;

            for ($j = $index + 1; $j < count($data); $j++) {
                if ($data[$j] < $data[$min]) {
                    $min = $j;
                }
            }

            $data = self::swapPositions($data, $index, $min);
        }

        return $data;
    }

    /**
     * @param array $data
     * @param int   $left
     * @param int   $right
     *
     * @return array
     */
    private static function swapPositions(array $data, int $left, int $right) : array
    {
        $backupOldDataRightValue = $data[$right];
        $data[$right] = $data[$left];
        $data[$left] = $backupOldDataRightValue;

        return $data;
    }
}
