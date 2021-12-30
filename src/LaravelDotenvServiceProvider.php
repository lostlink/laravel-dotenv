<?php

namespace Lostlink\LaravelDotenv;

use Lostlink\LaravelDotenv\Commands\DotenvPullCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDotenvServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-dotenv')
            ->hasConfigFile()
            ->hasCommands(
                DotenvPullCommand::class
            );
    }
}
