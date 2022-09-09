<?php

namespace fredcarterwolf\TallInstall\Actions\Filesystem;

class CreateFileAction
{
    public function execute(string $path): void
    {
        touch($path);
    }
}
