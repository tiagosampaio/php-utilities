<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class QuickSort
 *
 * Quick sort is a comparison sort, meaning that it can sort items of any type
 * for which a "less-than" relation (formally, a total order) is defined.
 *
 * @see https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-1.php
 * @package TiagoSampaio\Sorting
 */
class QuickSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        $loe = $gt = array();

        if (count($data) < 2) {
            return $data;
        }

        $pivotKey = key($data);
        $pivot = array_shift($data);

        foreach ($data as $val) {
            if ($val <= $pivot) {
                $loe[] = $val;
            } else if ($val > $pivot) {
                $gt[] = $val;
            }
        }

        return array_merge(self::sort($loe), [$pivotKey => $pivot], self::sort($gt));
    }
}
