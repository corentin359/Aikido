<?php

use Core\Config;
use Core\Database\MysqlDatabase;

/**
 * Class App contient des fonction et des variable global
 */
class App{

    private $db_instance;

    private static $_instance;

    /**
     * getInstance créé une insance de la classe App si elle n'éxiste pas deja
     * @return Une instance de la classe App
     */
    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    /**
     * load charge les autoloade
     */
    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }
    /**
     * getTable charge une table
     * @param $name le nom de la table a charger
     */
    public function getTable($name){
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';// créé le nom de la classe à charger
        return new $class_name($this->getDb());
    }

    /**
     * getDB créé une conexion a la base de donnée si elle n'éxiste pas deja
     * @return MysqlDatabase (la conexion)
     */
    public function getDb(){
        $config = Config::getInstance(ROOT . '/config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    /**
     * Défini le club.
     */
    public function getClub()
    {
        if (isset($_GET['club'])){
            $club = $_GET['club'];
            if ($club == 'AÏKIDO CEVENNES LE VIGAN' || $club == 'ARTS MARTIAUX VALLERAUGUE' || $club == 'AÏKIDO CEVENNES AIGOUAL') {
                $club = $_GET['club'];
            } else {
                $club = '';
            }
        }
        else{
            $club = 'AÏKIDO CEVENNES AIGOUAL';
        }
        return $club;
    }
}