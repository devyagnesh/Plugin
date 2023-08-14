<?php

namespace Plugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class PluginRouteServiceProvider
 * @package Plugin\Providers
 */
class PluginRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','Plugin\Controllers\PluginController@getHelloWorldPage');
    }
}