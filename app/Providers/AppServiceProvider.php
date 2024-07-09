<?php
namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('posts', \App\Http\Livewire\Posts::class);
        Schema::defaultStringLength(191);
    }
}

