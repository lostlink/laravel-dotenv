<?php

namespace Lostlink\LaravelDotenv;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lostlink\LaravelDotenv\Commands\DotenvPullCommand;

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
