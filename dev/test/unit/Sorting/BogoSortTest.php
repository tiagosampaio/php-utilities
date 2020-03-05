<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\BogoSort as SortingClass;

/**
 * Class BogoSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class BogoSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
