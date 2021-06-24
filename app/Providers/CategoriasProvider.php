<?php

namespace App\Providers;
use View;
use App\Models\Categoria;
use Illuminate\Support\ServiceProvider;

class CategoriasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function ($view) {
            $categorias = Categoria::all();
            $view->with('categorias', $categorias);

        });
    }
}
