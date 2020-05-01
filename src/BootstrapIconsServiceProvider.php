<?php

namespace Aurel\Icons;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BootstrapIconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bootstrap-icons');

        collect((new Filesystem())->files(__DIR__.'/../resources/views/components'))->map(function ($file) {
            return str_replace('.blade.php', '', $file->getFilename());
        })->each(function ($icon) {
            Blade::component("bootstrap-icons::components.{$icon}", "bi-{$icon}");
        });
    }
}
