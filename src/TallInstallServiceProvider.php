<?php

namespace fredcarterwolf\TallInstall;

use fredcarterwolf\TallInstall\Commands\TallInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TallInstallServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tall-install')
            ->hasCommand(TallInstallCommand::class);
    }
}
