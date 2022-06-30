<?php

namespace MichelMelo\LaravelSearch\Analyzer\Stopwords;

/**
 * Class Files.
 */
class Files
{
    /**
     * Get list of pathes to files with english and russian stopwords.
     *
     * @return array
     */
    public static function get()
    {
        return [
            __DIR__ . '/files/en',
            __DIR__ . '/files/ru',
        ];
    }
}
