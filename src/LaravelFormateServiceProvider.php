<?php

namespace RhysLees\LaravelFormate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RhysLees\LaravelFormate\Commands\LaravelFormateCommand;

class LaravelFormateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-formate')
            ->hasViews();
    }
}
