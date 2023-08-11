<?php

namespace Blastedcode\FilamentAstrotomicTranslatable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Blastedcode\FilamentAstrotomicTranslatable\Commands\FilamentAstrotomicTranslatableCommand;

class FilamentAstrotomicTranslatableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-astrotomic-translatable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-astrotomic-translatable_table')
            ->hasCommand(FilamentAstrotomicTranslatableCommand::class);
    }
}
