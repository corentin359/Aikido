<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:36
 */
class Conf
{

    static private $databases = array(
        'hostname' => 'localhost', // ou 127.0.0.1
        // nom de la BDD
        'database' => 'aikido',
        // A l'IUT, c'est votre login
        // compte 'root'
        'login' => 'root',
        // Sur votre machine personelle, vous avez creez ce mdp a l'installation
        'password' => 'feuaiki359.'
    );

    static private $debug = True;

    static public function getDebug()
    {
        return self::$debug;
    }

    static public function getLogin()
    {
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['login'];
    }

    static public function getHostname()
    {
        return self::$databases['hostname'];
    }

    static public function getDatabase()
    {
        return self::$databases['database'];
    }

    static public function getPassword()
    {
        return self::$databases['password'];
    }
}
?>
