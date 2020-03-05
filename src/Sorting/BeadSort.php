<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class BeadSort
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-1.php
 * @package TiagoSampaio\Sorting
 */
class BeadSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        foreach ($data as $e) {
            $poles [] = array_fill(0, $e, 1);
        }

        return array_map('count', self::columns(self::columns($poles)));
    }

    /**
     * @param array $data
     *
     * @return array
     */
    private static function columns(array $data) : array
    {
        if (count($data) == 0) {
            return array();
        } else if (count($data) == 1) {
            return array_chunk($data[0], 1);
        }

        array_unshift($data, null);

        $transpose = call_user_func_array('array_map', $data);

        return array_map('array_filter', $transpose);
    }
}
