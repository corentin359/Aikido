<?php

namespace App\Controller\Admin;
class CategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
    }
    /**
     * index affiche les categorie affin de les administrer
     */
    public function index(){
        $items = $this->Category->all();
        $this->render('admin.categories.index', compact('items'));
    }

    /**
     * add Permet l'ajoute d'une categorie
     */
    public function add(){
        if (!empty($_POST)) {
            $result = $this->Category->create([
                'titre' => $_POST['titre'],
            ]);
            return $this->index();
        }
        $this->render('admin.categories.edit');
    }
    /**
     * edit Permet de modifier une categorie
     */
    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Category->update($_GET['id'], [
                'titre' => $_POST['titre'],
            ]);
            return $this->index();
        }
        $category = $this->Category->find($_GET['id']);
        $this->render('admin.categories.edit', compact('category'));
    }
    /**
     * delete Suprime d'une categorie
     */
    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Category->delete($_POST['id']);
            return $this->index();
        }
    }

}