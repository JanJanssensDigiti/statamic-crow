<?php

namespace digiti\StatamicCrow;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use digiti\StatamicCrow\Commands\StatamicCrowCommand;

class StatamicCrowServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('statamic-crow')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_statamic-crow_table')
            ->hasCommand(StatamicCrowCommand::class);
    }
}
