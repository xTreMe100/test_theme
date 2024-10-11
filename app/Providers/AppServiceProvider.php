<?php

namespace App\Providers;

use App\View\Components\Contacts\Text;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('contact-text', Text::class);
        $theme = base_path() . '/resources/views/themes/';
        View::addLocation($theme);
    }
}
