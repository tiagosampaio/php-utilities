<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\RadixSort as SortingClass;

/**
 * Class RadixSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class RadixSortTest extends SortAbstract
{
    /**
     * @test
     */
    public function sort()
    {
        $n = count($this->getSortedList());
        $this->assertEquals($this->getSortedList(), SortingClass::sort($this->getUnsortedList(), $n));
    }

    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }

    /**
     * @return array
     */
    protected function getUnsortedList() : array
    {
        return $this->unsortedDataPositives;
    }

    /**
     * @return array
     */
    protected function getSortedList() : array
    {
        return $this->sortedDataPositives;
    }
}
