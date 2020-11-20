<?php

namespace Layman\DingTalk;

use Illuminate\Support\ServiceProvider;

class DingTalkServiceProvider extends ServiceProvider
{
    protected $defer;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dingtalk', function ($app) {
            return new DingTalkManager($app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__."/config/dingtalk.php" => config_path("dingtalk.php"),
        ]);
    }

    public function provides()
    {
        return ['dingtalk'];
    }
}
