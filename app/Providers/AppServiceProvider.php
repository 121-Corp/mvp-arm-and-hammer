<?php

namespace App\Providers;

use App\View\Components\Footer;
use App\View\Components\Header;
use App\View\Components\Informative;
use App\View\Components\ContactCard;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('header', Header::class);
        Blade::component('informative', Informative::class);
        Blade::component('footer', Footer::class);
        Blade::component('contact-card', ContactCard::class);
    }
}
