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
        $this->assertEquals($this->getSortedList(), SortingClass::sort($this->getUnsortedList(), -1, 5));
    }
}
