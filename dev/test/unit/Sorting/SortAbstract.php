<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use PHPUnit\Framework\TestCase;

/**
 * Class SortAbstract
 *
 * @package TiagoSampaioTest\Sorting
 */
abstract class SortAbstract extends TestCase
{
    /**
     * @var array
     */
    protected $unsorted = [3, 0, 2, 5, -1, 4, 1];

    /**
     * @var array
     */
    protected $sorted = [-1, 0, 1, 2, 3, 4, 5];

    /**
     * @var array
     */
    protected $unsortedPositives = [170, 45, 75, 90, 802, 24, 2, 66];

    /**
     * @var array
     */
    protected $sortedPositives = [2, 24, 45, 66, 75, 90, 170, 802];

    /**
     * General test for sorting algorithms.
     * @test
     */
    public function sort()
    {
        $this->assertEquals($this->getSortedList(), $this->getSortingClass()::sort($this->getUnsortedList()));
    }

    /**
     * Prepares the base class.
     * @return string
     */
    protected function getSortingClass() : string
    {
        return '';
    }

    /**
     * @return array
     */
    protected function getUnsortedList() : array
    {
        return $this->unsorted;
    }

    /**
     * @return array
     */
    protected function getSortedList() : array
    {
        return $this->sorted;
    }
}
