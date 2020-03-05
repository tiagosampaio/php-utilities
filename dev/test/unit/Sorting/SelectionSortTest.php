<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\SelectionSort as SortingClass;

/**
 * Class SelectionSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class SelectionSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
