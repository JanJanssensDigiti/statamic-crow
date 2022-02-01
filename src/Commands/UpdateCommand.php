<?php

namespace Digiti\Crow\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class UpdateCommand extends Command
{
    public $signature = 'crow-update';

    public $description = 'My command';

    public function clean($path)
    {
        if (file_exists($path)) {
            unlink($path);
        }
    }

    public function handle()
    {
        //remove some files
        //TODO: Provide clean script?
        //Artisan::call('crow-clean');
        //$this->info('Application cleaned');

        //copy all files    
        Artisan::call('vendor:publish --tag=crow-layouts');
        Artisan::call('vendor:publish --tag=crow-partials');
        Artisan::call('vendor:publish --tag=crow-fieldsets');
        Artisan::call('vendor:publish --tag=crow-blueprints');
        Artisan::call('vendor:publish --tag=crow-collections');
        $this->info('Copied all files');

        //Clear cache
        Artisan::call('optimize:clear');
        $this->info('Cleared Cache');

        $this->comment('All done!');
    }
}