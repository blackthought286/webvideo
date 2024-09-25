<?php

namespace App\Providers;

use App\Models\UserPlaylist;
use App\Repositories\PlaylistRepository;
use App\Repositories\PlaylistRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PlaylistRepositoryInterface::class, function($app){
            return new PlaylistRepository(new UserPlaylist());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
