<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\BubbleSort as SortingClass;

/**
 * Class InsertionSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class BubbleSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
