<?php

namespace Showable\Showable\Commands;

use Illuminate\Console\Command;

class ShowableCommand extends Command
{
    public $signature = 'laravel-showable-resource';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
