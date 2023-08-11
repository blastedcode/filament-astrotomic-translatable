<?php

namespace Blastedcode\FilamentAstrotomicTranslatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Blastedcode\FilamentAstrotomicTranslatable\FilamentAstrotomicTranslatable
 */
class FilamentAstrotomicTranslatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Blastedcode\FilamentAstrotomicTranslatable\FilamentAstrotomicTranslatable::class;
    }
}
