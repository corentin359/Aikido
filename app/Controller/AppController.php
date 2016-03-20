<?php

namespace App\Controller;
use Core\Controller\Controller;
use \App;

class AppController extends Controller{
    protected $club;

    /**
     * AppController constructor.
     * Défini le chemin vers le dossier qui contient les vues
     */
    public function __construct(){
        $this->viewPath = ROOT . '/app/Views/';
    }
    /**
     * loadModel charge les tables
     * @param $model_name le nom du model a charger
     */
    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }
}