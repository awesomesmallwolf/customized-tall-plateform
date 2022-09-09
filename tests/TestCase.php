<?php

namespace fredcarterwolf\TallInstall\Tests;

use fredcarterwolf\TallInstall\TallInstallServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            TallInstallServiceProvider::class,
        ];
    }
}
