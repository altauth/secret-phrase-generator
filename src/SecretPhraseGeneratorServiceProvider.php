<?php

namespace AltAuth\SecretPhraseGenerator;

use Illuminate\Support\ServiceProvider;

class SecretPhraseGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/routes.php');
    }
}
