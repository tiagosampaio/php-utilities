<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\BeadSort as SortingClass;

/**
 * Class BeadSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class BeadSortTest extends SortAbstract
{
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
        return array_reverse($this->sortedDataPositives);
    }
}
