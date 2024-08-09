<?php

namespace Heroicons;

use Heroicons\View\Components\Icon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class HeroiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
    }

    public function boot(): void
    {
        Blade::component('icon', Icon::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'heroicons');
    }
}