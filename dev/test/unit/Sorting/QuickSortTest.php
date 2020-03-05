<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\QuickSort as SortingClass;

/**
 * Class QuickSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class QuickSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
