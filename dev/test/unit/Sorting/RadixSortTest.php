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
        $n = count($this->unsortedDataPositives);
        $this->assertEquals($this->sortedDataPositives, SortingClass::sort($this->unsortedDataPositives, $n));
    }

    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
