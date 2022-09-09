<?php

namespace fredcarterwolf\TallInstall\Actions\Filesystem;

class CreateFolderAction
{
    public function execute(string $path): void
    {
        mkdir($path, 0777, true);
    }
}
