<?php

namespace App\Providers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('edit-movie', function (User $user, Movie $movie) {
           return $movie->user->is($user);
       });
    }
}
