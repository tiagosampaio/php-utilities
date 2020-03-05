<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\CountingSort as SortingClass;

/**
 * Class CountingSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class CountingSortTest extends SortAbstract
{
    /**
     * @test
     */
    public function sort()
    {
        $this->assertEquals($this->sortedData, SortingClass::sort($this->unsortedData, -1, 5));
    }
}
