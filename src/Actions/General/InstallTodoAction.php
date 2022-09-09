<?php

namespace fredcarterwolf\TallInstall\Actions\General;

class InstallTodoAction
{
    public function execute(string $basePath): void
    {
        touch($basePath . '/todo');
    }
}
