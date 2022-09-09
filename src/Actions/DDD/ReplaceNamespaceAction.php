<?php

namespace fredcarterwolf\TallInstall\Actions\DDD;

use fredcarterwolf\TallInstall\Actions\Filesystem\FileGetContentsAction;
use fredcarterwolf\TallInstall\Actions\Filesystem\FilePutContentsAction;
use Illuminate\Support\Str;

class ReplaceNamespaceAction
{
    public function __construct(
        private FileGetContentsAction $fileGetContentsAction,
        private FilePutContentsAction $filePutContentsAction,
    ) {
    }

    public function execute(string $basePath, $files): void
    {
        collect($files)->each(function (array $file) use ($basePath): void {
            $this->filePutContentsAction->execute(
                $basePath . $file['path'],
                Str::replace($file['search'], $file['replace'], $this->fileGetContentsAction->execute($basePath . $file['path']))
            );
        });
    }
}
