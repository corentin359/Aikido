<?php
namespace App\Controller\Admin;

class AccueilController extends ArticlesController{
    public function __construct(){
        parent::__construct();
    }
    public function show(){
        parent::getUneCategorie(1,'admin.accueil.index');
    }
}