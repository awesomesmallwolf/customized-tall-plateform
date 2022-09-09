<?php

namespace fredcarterwolf\TallInstall\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use fredcarterwolf\TallInstall\TallInstallServiceProvider;

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
