<?php

namespace App\Providers;

use App\Repositories\OfferRepository;
use App\Repositories\Interfaces\OfferRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            OfferRepositoryInterface::class, 
            OfferRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
