<?php

namespace Blastedcode\FilamentAstrotomicTranslatable\Tests;

use Blastedcode\FilamentAstrotomicTranslatable\FilamentAstrotomicTranslatableServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Blastedcode\\FilamentAstrotomicTranslatable\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentAstrotomicTranslatableServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-astrotomic-translatable_table.php';
        $migration->up();
        */
    }
}
