<?php

namespace App\Providers;

use App\Todo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $completedTODO = Todo::where('completed', '=', 'Yes')->count();


        //dd($completedTODO);

        view()->share('completedTODO',$completedTODO);

        // Kan ook nog korter met
        // view()->share('completedTODO',Todo::where('completed', '=', 'Yes')->count());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
