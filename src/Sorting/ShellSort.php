<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class ShellSort
 *
 * According to Wikipedia "Shell sort or Shell's method, is an in-place comparison sort.
 * It can be seen as either a generalization of sorting by exchange (bubble sort)
 * or sorting by insertion (insertion sort). The method starts by sorting pairs of elements far apart from each other,
 * then progressively reducing the gap between elements to be compared.
 * Starting with far apart elements can move some out-of-place elements
 * into position faster than a simple nearest neighbor exchange."
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-5.php
 * @package TiagoSampaio\Sorting
 */
class ShellSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        $x = round(count($data) / 2);

        while ($x > 0) {
            for ($i = $x; $i < count($data); $i++) {
                $temp = $data[$i];
                $j = $i;
                
                while ($j >= $x && $data[$j - $x] > $temp) {
                    $data[$j] = $data[$j - $x];
                    $j -= $x;
                }

                $data[$j] = $temp;
            }

            $x = round($x / 2.2);
        }

        return $data;
    }
}
