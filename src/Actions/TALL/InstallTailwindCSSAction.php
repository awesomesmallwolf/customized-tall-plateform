<?php

namespace fredcarterwolf\TallInstall\Actions\TALL;

use fredcarterwolf\TallInstall\Actions\NPM\NpmInstallAction;

class InstallTailwindCSSAction
{
    public function __construct(
        private NpmInstallAction $npmInstallAction,
    ) {
    }

    public function execute(string $basePath): void
    {
        $this->npmInstallAction->execute(['-D', 'tailwindcss', 'postcss', 'autoprefixer', '@tailwindcss/forms', '@tailwindcss/typography'], $basePath);
    }
}
