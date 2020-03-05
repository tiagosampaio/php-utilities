<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\CombSort as SortingClass;

/**
 * Class CombSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class CombSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
