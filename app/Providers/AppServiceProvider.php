<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Department;
use Illuminate\Support\Facades\View;

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
        // Share departments with all views
        View::composer('*', function ($view) {
            $departments = Department::orderBy('name', 'asc')->get();
            $view->with('departments', $departments);
        });
    }
}
