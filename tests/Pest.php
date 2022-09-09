<?php

use function fredcarterwolf\PestPluginFilesystem\rm;
use function fredcarterwolf\PestPluginFilesystem\rmdir_recursive;

use fredcarterwolf\TallInstall\Tests\TestCase;
use Symfony\Component\Filesystem\Filesystem;

uses(TestCase::class)
    ->beforeEach(function () {
        if (file_exists(__DIR__ . '/tmp')) {
            rmdir_recursive(__DIR__ . '/tmp');
        }

        mkdir(__DIR__ . '/tmp', 0777, true);

        prepareEnvironment();
    })->in('Feature', 'Unit');

function prepareEnvironment()
{
    rm(__DIR__ . '/tmp');
    mkdir(__DIR__ . '/tmp', 0777, true);

    $filesystem = new Filesystem();

    $filesystem->mirror(__DIR__ . '/../fixtures/laravel-8.x', __DIR__ . '/tmp/laravel-8.x');
    $filesystem->mirror(__DIR__ . '/../fixtures/laravel-8.x-tall', __DIR__ . '/tmp/laravel-8.x-tall');
}
