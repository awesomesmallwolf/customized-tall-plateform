<?php

namespace fredcarterwolf\TallInstall\Actions;

use fredcarterwolf\TallInstall\Actions\General\InstallGitignoreAction;
use fredcarterwolf\TallInstall\Actions\General\InstallTodoAction;
use fredcarterwolf\TallInstall\Actions\TALL\InitTailwindCSSAction;
use fredcarterwolf\TallInstall\Actions\TALL\InstallAlpineAction;
use fredcarterwolf\TallInstall\Actions\TALL\InstallAssetsAction;
use fredcarterwolf\TallInstall\Actions\TALL\InstallBladeAction;
use fredcarterwolf\TallInstall\Actions\TALL\InstallFilamentAction;
use fredcarterwolf\TallInstall\Actions\TALL\InstallLivewireAction;
use fredcarterwolf\TallInstall\Actions\TALL\InstallTailwindCSSAction;
use fredcarterwolf\TallInstall\Actions\TALL\InstallToastAction;
use fredcarterwolf\TallInstall\Commands\Interfaces\Pingable;

class TallInstallAction
{
    public function __construct(
        private InstallAlpineAction $installAlpineAction,
        private InstallFilamentAction $installFilamentAction,
        private InstallTailwindCSSAction $installTailwindCSSAction,
        private InitTailwindCSSAction $initTailwindCSSAction,
        private InstallLivewireAction $installLivewireAction,
        private InstallToastAction $installToastAction,
        private InstallAssetsAction $installAssetsAction,
        private InstallBladeAction $installBladeAction,
        private InstallTodoAction $installTodoAction,
        private InstallGitignoreAction $installGitignoreAction,
    ) {
    }

    protected ?Pingable $pingable = null;

    public function execute(string $basePath)
    {
        $this->ping('Installing Alpine');
        $this->installAlpineAction->execute($basePath);

        $this->ping('Installing Filament');
        $this->installFilamentAction->execute($basePath);

        $this->ping('Installing Tailwind CSS');
        $this->installTailwindCSSAction->execute($basePath);
        $this->initTailwindCSSAction->execute($basePath);

        $this->ping('Installing Livewire');
        $this->installLivewireAction->execute($basePath);

        $this->ping('Installing Toast');
        $this->installToastAction->execute($basePath);

        $this->ping('Installing assets & configuring project');
        $this->installAssetsAction->execute($basePath);
        $this->installBladeAction->execute($basePath);
        $this->installTodoAction->execute($basePath);
        $this->installGitignoreAction->execute($basePath);
    }

    protected function ping(string $text): void
    {
        if ($this->pingable) {
            $this->pingable->ping($text);
        }
    }

    public function pingable(Pingable $pingable): static
    {
        $this->pingable = $pingable;

        return $this;
    }
}
