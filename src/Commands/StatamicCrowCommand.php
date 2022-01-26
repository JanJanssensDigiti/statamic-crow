<?php

namespace digiti\StatamicCrow\Commands;

use Illuminate\Console\Command;

class StatamicCrowCommand extends Command
{
    public $signature = 'statamic-crow';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
