<?php

namespace Lostlink\LaravelDotenv\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lostlink\LaravelDotenv\LaravelDotenvServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lostlink\\LaravelDotenv\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDotenvServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-dotenv_table.php.stub';
        $migration->up();
        */
    }
}
