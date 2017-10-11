<?php

namespace KDuma\PassphraseGenerator;

use Illuminate\Support\ServiceProvider;

class PassphraseGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PassphraseGenerator::class, function ($app) {
            return new PassphraseGenerator();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [PassphraseGenerator::class];
    }
}
