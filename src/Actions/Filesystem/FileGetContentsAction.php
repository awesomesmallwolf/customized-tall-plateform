<?php

namespace fredcarterwolf\TallInstall\Actions\Filesystem;

class FileGetContentsAction
{
    public function execute(string $path): string
    {
        return file_get_contents($path);
    }
}
