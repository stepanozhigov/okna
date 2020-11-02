<?php

namespace App\Providers;

use App\City;
use App\Direction;
use App\SeoBlock;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Http\Controllers\ContentTypes\Image as tcgImage;
use App\Http\Controllers\Voyager\Image as tcgAppImage;

class AppServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {

        View::share('cities', City::all());
        //View::share('currentCity', request()->route()->city);
        View::share('directions', Direction::where('id', '!=', 1)->get());
        View::share('currentDirection',Direction::find(1));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('TCG\Voyager\Http\Controllers\ContentTypes\Image1', 'App\Http\Controllers\Voyager\Image');
        //dd($this->app->bind('TCG\VoyageentTypes\Image', 'App\Http\Controllers\Voyager\Image'));
        $this->app->bind(VoyagerBreadController::class, MyBreadController::class);
    }
}
