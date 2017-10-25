<?php

/**
 * Class with utility functions for the entire application
 */
class Utility{
    
    /**
     * Returns password hash for the given clear text password
     * 
     * @param type $password        password in clear text
     * @return type                 hash
     */
    public static function get_password_hash($password) 
    {
        return password_hash($password,PASSWORD_DEFAULT);
    }

    /**
     * 
     * @param type $password_input      Password entered by user
     * @param type $password_existing   Password stored in datbase
     * @return type                     TRUE/FALSE
     */
    public static function verify_password($password_input,$password_existing) 
    {
        return password_verify($password_input,$password_existing);
    }
}