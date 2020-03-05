<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\BeadSort as SortingClass;

/**
 * Class BeadSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class BeadSortTest extends SortAbstract
{
    /**
     * @var array
     */
    protected $unsortedData = array(3, 2, 5, 4, 1, 100, 35);

    /**
     * @var array
     */
    protected $sortedData = array(100, 35, 5, 4, 3, 2, 1);

    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
