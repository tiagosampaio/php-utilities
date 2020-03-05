<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\InsertionSort as SortingClass;

/**
 * Class InsertionSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class InsertionSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
