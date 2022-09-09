<?php

namespace fredcarterwolf\TallInstall\Actions\TALL;

use fredcarterwolf\TallInstall\Actions\NPM\NpmInstallAction;

class InstallAlpineAction
{
    public function __construct(
        private NpmInstallAction $npmInstallAction,
    ) {
    }

    public function execute(string $basePath): void
    {
        $this->npmInstallAction->execute(['alpinejs', '@alpinejs/focus', '--save-dev'], $basePath);
    }
}
