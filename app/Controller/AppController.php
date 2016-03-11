<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class AppController extends Controller{

    protected  $template = 'default';

    /**
     * AppController constructor.
     * Défini le chemin vers le dossier qui contient les vues
     */
    public function __construct(){
        $this->viewPath = ROOT . '/app/Views/';
    }

    /**
     * @param $model_name charge les tables
     */
    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }

}