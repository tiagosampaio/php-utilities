<?php

declare(strict_types = 1);

namespace TiagoSampaio\Sorting;

/**
 * Class CocktailSort
 *
 * Cocktail shaker sort (also known as bidirectional bubble sort, cocktail sort, shaker sort, ripple sort, shuffle
 * sort,
 * or shuttle sort ) is a variation of bubble sort that is both a stable sorting algorithm and a comparison sort.
 * The algorithm differs from a bubble sort in that it sorts in both directions on each pass through the list.
 * This sorting algorithm is only marginally more difficult to implement than a bubble sort
 * and solves the problem of turtles in bubble sorts. It provides only marginal performance improvements,
 * and does not improve asymptotic performance; like the bubble sort,
 * it is not of practical interest, though it finds some use in education.
 *
 * @see     https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-7.php
 * @package TiagoSampaio\Sorting
 */
class CocktailSort
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function sort(array $data) : array
    {
        if (is_string($data)) {
            $data = str_split(preg_replace('/\s+/', '', $data));
        }

        do {
            $swapped = false;
            for ($i = 0; $i < count($data); $i++) {
                if (isset($data[$i + 1])) {
                    if ($data[$i] > $data[$i + 1]) {
                        list($data[$i], $data[$i + 1]) = array($data[$i + 1], $data[$i]);
                        $swapped = true;
                    }
                }
            }

            if ($swapped == false) {
                break;
            }

            $swapped = false;
            for ($i = count($data) - 1; $i >= 0; $i--) {
                if (isset($data[$i - 1])) {
                    if ($data[$i] < $data[$i - 1]) {
                        list($data[$i], $data[$i - 1]) = array($data[$i - 1], $data[$i]);
                        $swapped = true;
                    }
                }
            }
        } while ($swapped);

        return $data;
    }
}
