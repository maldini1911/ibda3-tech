<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Social_Media;
use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share([
            'setting' => Setting::orderBy('id', 'desc')->first(),
            'icons' => Social_Media::get(),
            'pages_menu' =>  Page::where('show_in_menu', 1)->get(),
        ]);

    }
}
