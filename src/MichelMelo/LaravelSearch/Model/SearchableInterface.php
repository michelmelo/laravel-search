<?php

namespace MichelMelo\LaravelSearch\Model;

/**
 * Interface SearchableInterface.
 */
interface SearchableInterface
{
    /**
     * Get id list for all searchable models.
     *
     * @return int[]
     */
    public static function searchableIds();
}
