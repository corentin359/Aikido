<?php

namespace App\Controller\Admin;

use \App;
use \Core\Auth\DBAuth;


class AppController extends \App\Controller\AppController{
    /**
     * AppController constructor.
     * forcer les utilisateur a être connecté pour accéder aux page
     */
    public function __construct(){
        parent::__construct();
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()){
            $this->forbidden();
        }
    }

}