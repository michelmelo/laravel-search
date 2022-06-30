<?php

namespace MichelMelo\LaravelSearch\Console;

use Config;
use Illuminate\Console\Command;
use Symfony\Component\Console\Output\NullOutput;

/**
 * Class ClearCommand.
 */
class ClearCommand extends Command
{
    protected $name        = 'search:clear';
    protected $description = 'Clear the search index storage';

    public function handle()
    {
        if (! $this->option('verbose')) {
            $this->output = new NullOutput;
        }

        if (\File::isDirectory($indexPath = Config::get('laravel-lucene-search.index.path'))) {
            \File::deleteDirectory($indexPath);
            $this->info('Search index is cleared.');
        } else {
            $this->comment('There is nothing to clear..');
        }
    }
}
