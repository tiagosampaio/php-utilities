<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class CountingSort
 *
 * According to Wikipedia "In computer science, counting sort is an algorithm for sorting a collection of
 * objects according to keys that are small integers; that is, it is an integer sorting algorithm.
 * It operates by counting the number of objects that have each distinct key value,
 * and using arithmetic on those counts to determine the positions of each key value in the output sequence.
 * Its running time is linear in the number of items and the difference between the maximum and minimum key values,
 * so it is only suitable for direct use in situations where the variation in keys is not significantly greater than
 * the number of items. However, it is often used as a subroutine in another sorting algorithm, radix sort,
 * that can handle larger keys more efficiently".
 *
 * The algorithm loops over the items, computing a histogram of the number of times
 * each key occurs within the input collection.
 * It then performs a prefix sum computation (a second loop, over the range of possible keys) to determine,
 * for each key, the starting position in the output array of the items having that key. Finally,
 * it loops over the items again, moving each item into its sorted position in the output array.
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-11.php
 * @package TiagoSampaio\Sorting
 */
class CountingSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data, int $min, int $max) : array
    {
        $count = array();

        for ($i = $min; $i <= $max; $i++) {
            $count[$i] = 0;
        }

        foreach ($data as $number) {
            $count[$number]++;
        }

        $z = 0;

        for ($i = $min; $i <= $max; $i++) {
            while ($count[$i]-- > 0) {
                $data[$z++] = $i;
            }
        }

        return $data;
    }
}
