<?php

namespace RafaelFranca\BrazilianTypesDirectives;

use Illuminate\Support\Facades\Blade;

class BrazilianTypesRepository {
	/**
     * Register the directives.
     *
     * @param  array $directives
     * @return void
     */
    public static function register(array $directives)
    {
        collect($directives)->each(function ($item, $key) {
            Blade::directive($key, $item);
        });
    }

    /**
     * Strip single spaces.
     * 
     * @param  string $expression
     * @return string
     */
    public static function stripSpaces($expression)
    {
    	return str_replace(' ', '', $expression);
    }

    /**
     * Strip single dots.
     * 
     * @param  string $expression
     * @return string
     */
    public static function stripDots($expression)
    {
        return str_replace('.', '', $expression);
    }

    /**
     * Strip single dashs.
     * 
     * @param  string $expression
     * @return string
     */
    public static function stripDash($expression)
    {
        return str_replace('-', '', $expression);
    }
}