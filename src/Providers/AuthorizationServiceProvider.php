<?php namespace Xannn94\Support\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider;

/**
 * Class     AuthorizationServiceProvider
 *
 * @package  Xannn94\Support\Providers
 * @author   Xannn94 <axiles94@gmail.com>
 */
class AuthorizationServiceProvider extends AuthServiceProvider
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Define policies.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @param  string                                  $class
     * @param  array                                   $policies
     */
    protected function defineMany($gate, $class, array $policies)
    {
        foreach ($policies as $method => $ability) {
            $gate->define($ability, "$class@$method");
        }
    }
}
