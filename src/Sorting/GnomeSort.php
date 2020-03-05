<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class GnomeSort
 *
 * Gnome sort is a sorting algorithm originally proposed by Dr. Hamid Sarbazi-Azad (Professor of Computer Engineering
 * at Sharif University of Technology) in 2000 and called "stupid sort" (not to be confused with bogosort),
 * and then later on described by Dick Grune and named "gnome sort".
 *
 * The algorithm always finds the first place where two adjacent elements are in the wrong order and swaps them.
 * It takes advantage of the fact that performing a swap can introduce a new out-of-order
 * adjacent pair only next to the two swapped elements.
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-9.php
 * @package TiagoSampaio\Sorting
 */
class GnomeSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        $index = 1;
        $delta = 2;

        while ($index < count($data)) {
            if ($data[$index - 1] <= $data[$index]) {
                $index = $delta;
                $delta++;
            } else {
                list($data[$index], $data[$index - 1]) = array($data[$index - 1], $data[$index]);
                $index--;

                if ($index == 0) {
                    $index = $delta;
                    $delta++;
                }
            }
        }

        return $data;
    }
}
