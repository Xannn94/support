<?php namespace Xannn94\Support\Traits;

/**
 * Trait     Abortable
 *
 * @package  Xannn94\Support\Traits
 * @author   Xannn94 <axiles94@gmail.com>
 */
trait Abortable
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Throw Page not found [404].
     *
     * @param  string  $message
     * @param  array   $headers
     */
    protected static function pageNotFound($message = 'Page not Found', array $headers = [])
    {
        return abort(404, $message, $headers);
    }

    /**
     * Throw AccessNotAllowed [403].
     *
     * @param  string  $message
     * @param  array   $headers
     */
    protected static function accessNotAllowed($message = 'Access denied !', array $headers = [])
    {
        return abort(403, $message, $headers);
    }
}
