<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CkProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
            $this->publishes([
             __DIR__.'/../../vendor/ckeditor/'  => public_path('vendor/ckeditor'),
            ],'ck');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
