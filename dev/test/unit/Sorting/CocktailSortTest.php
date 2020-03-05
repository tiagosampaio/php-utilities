<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\Sorting;

use TiagoSampaio\Sorting\CocktailSort as SortingClass;

/**
 * Class CocktailSortTest
 *
 * @package TiagoSampaioTest\Sorting
 */
class CocktailSortTest extends SortAbstract
{
    /**
     * @inheritDoc
     */
    protected function getSortingClass() : string
    {
        return SortingClass::class;
    }
}
