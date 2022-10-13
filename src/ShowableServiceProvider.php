<?php

namespace Showable\Showable;

use Showable\Showable\Commands\ShowableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShowableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-showable-resource')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-showable-resource_table')
            ->hasCommand(ShowableCommand::class);
    }
}
