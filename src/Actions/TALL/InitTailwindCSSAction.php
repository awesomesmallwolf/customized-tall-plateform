<?php

namespace fredcarterwolf\TallInstall\Actions\TALL;

use fredcarterwolf\TallInstall\Actions\Filesystem\CopyAction;

class InitTailwindCSSAction
{
    public function __construct(
        private CopyAction $copyAction,
    ) {
    }

    public function execute(string $basePath): void
    {
        $this->copyAction->execute(stub('tailwind.config.js'), $basePath . '/tailwind.config.js', true);
    }
}
