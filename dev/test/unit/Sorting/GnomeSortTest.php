<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\GnomeSort as SortingClass;

/**
 * Class GnomeSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class GnomeSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
