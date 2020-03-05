<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\ShellSort as SortingClass;

/**
 * Class SelectionSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class ShellSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
