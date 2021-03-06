<?php namespace Xannn94\Support\Providers;

use Illuminate\Contracts\Routing\Registrar as Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

/**
 * Class     RouteServiceProvider
 *
 * @package  Xannn94\Support\Laravel\Providers
 * @author   Xannn94 <axiles94@gmail.com>
 *
 * @method   \Illuminate\Contracts\Routing\Registrar  middleware(\string $name, \string $class)
 */
abstract class RouteServiceProvider extends ServiceProvider
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     */
    abstract public function map(Router $router);
}
