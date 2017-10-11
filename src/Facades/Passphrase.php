<?php
namespace KDuma\PassphraseGenerator\Facades;

use Illuminate\Support\Facades\Facade;
use KDuma\PassphraseGenerator\PassphraseGenerator;

class Passphrase extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return PassphraseGenerator::class; }
}