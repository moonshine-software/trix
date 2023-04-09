<?php

declare(strict_types=1);

namespace MoonShine\Trix\Providers;

use Illuminate\Support\ServiceProvider;

final class TrixServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-trix');


        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-trix'),
        ], ['moonshine-trix-assets', 'laravel-assets']);
    }
}
