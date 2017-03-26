<?php

namespace App\Providers;

use App\Repositories\Phone\EloquentPhone;
use App\Repositories\Phone\PhoneRepository;
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PhoneRepository::class, EloquentPhone::class);
    }
}
