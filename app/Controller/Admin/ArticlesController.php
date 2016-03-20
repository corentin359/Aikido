<?php
namespace App\Controller\Admin;

class ArticlesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Article');
    }
    /**
     * index affiche les article affin de les administrer
     */
    public function index(){
        $items = $this->Article->all();
        $this->loadModel('Category');
        $categories = $this->Category->all();
        $this->render('admin.articles.index', compact('items', 'categories'));
    }
    /**
     * add Permet l'ajoute d'un article
     */
    public function add(){
        if (!empty($_POST)) {
            $result = $this->Article->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->all();
        $this->render('admin.articles.edit', compact('categories'));
    }
    /**
     * edit Permet la modification un article
     */
    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Article->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);
            if($result){
                return $this->index();
            }
        }
        $article = $this->Article->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->all();
        $this->render('admin.articles.edit', compact('categories', 'article'));
    }
    /**
     * delete Suprime un article
     */
    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Article->delete($_POST['id']);
            return $this->index();
        }
    }
        /**
     * getUneCategorie Affiche tous les articles d'une categorie
     * @param $id id de la categorie a afficher
     * @param $nomShow le nom de la categorie a affiher
     */
    public function getUneCategorie($id, $nomShow)
    {
        $UneCategorie = new \App\Controller\ArticlesController();
        $UneCategorie->getUneCategorie($id, $nomShow);
    }

}