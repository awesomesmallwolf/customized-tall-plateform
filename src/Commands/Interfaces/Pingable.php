<?php

namespace fredcarterwolf\TallInstall\Commands\Interfaces;

interface Pingable
{
    public function ping(string $text): void;
}
