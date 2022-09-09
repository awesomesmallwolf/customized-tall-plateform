<?php

namespace fredcarterwolf\TallInstall\Exceptions\Filesystem;

use Exception;

class CopyActionFailedException extends Exception
{
    public function __construct(
        protected string $message,
    ) {
        parent::__construct($message);
    }
}
