<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Facebook\Facebook;
use Illuminate\Support\ServiceProvider;

class FacebookApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(Facebook::class, function ($app) {
          $config = config('services.facebook');
          return new Facebook([
             'http_client_handler' => 'stream',
              'app_id' => $config['client_id'],
              'app_secret' => $config['client_secret'],
              'default_graph_version' => 'v2.6',
          ]);
      });
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
