<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\View\Composers\BranchComposer;
use App\View\Composers\CountsComposer;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CategoryComposer;
use App\View\Composers\CartComposer;

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
        Paginator::useBootstrap();
        View::composer('*', BranchComposer::class);
        View::composer('*', CategoryComposer::class);
        View::composer('*', CartComposer::class);
        View::composer('*', CountsComposer::class);
    }
}
