<?php

namespace Plugin\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class PluginServiceProvider
 * @package Plugin\Providers
 */
class PluginServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(PluginRouteServiceProvider::class);
    }
}