<?php
class session
{

    /*
     * Start the session
     *
     */
    public static function init ()
    {
        @session_start();
    }

    /*
     * Set session key
     *
     */
    public static function set ($key,$value)
    {
        $_SESSION[$key] = $value;
        return true;
    }


    /*
     * Get a session from the key
     *
     */
    public static function get ($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }


    /*
     * Unsets a session through the key
     *
     */
    public static function destroy ($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
        //session_destroy();
    }



}