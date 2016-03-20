<?php
namespace App\Controller;

class AccueilController extends ArticlesController{
    public function __construct(){
        parent::__construct();
    }
    public function show(){
        parent::getUneCategorie(1,'accueil.index');
    }
}