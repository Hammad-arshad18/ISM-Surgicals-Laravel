<?php

namespace App\Providers;

use App\Models\BasicInfo;
use App\Models\Category;
// use Facade\FlareClient\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


use function GuzzleHttp\Promise\all;

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
        $categories = Category::all();
        View::share('categories_global', $categories);

        $basic = BasicInfo::find(1);
        View::share('basic_info', $basic);
    }
}
