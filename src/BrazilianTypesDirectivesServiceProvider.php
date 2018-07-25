<?php

namespace RafaelFranca\BrazilianTypesDirectives;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BrazilianTypesDirectivesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerDirectives();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }

    /**
     * Register all directives.
     *
     * @return void
     */
    public function registerDirectives()
    {
        $directives = require __DIR__.'/directives.php';
        BrazilianTypesRepository::register($directives);
    }
}