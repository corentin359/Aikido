<?php

namespace App\Controller;

use Core\Controller\Controller;

class ArticlesController extends AppController{

    /**
     * ArticlesController constructor.
     * charge les model Article et Category
     */
    public function __construct(){
        parent::__construct();
        $this->loadModel('Article');
        $this->loadModel('Category');

    }
    /**
     * page d'accueil qui liste les différent article
     */
    public function index(){
        // charge les models
        $articles = $this->Article->last();
        $categories = $this->Category->all();
        // affiche la vue
        $this->render('articles.index', compact('articles', 'categories'));//$x=5 compact(x) créé un tableau x=>5
    }
    /**
     * la categorie que l'on souhaite consulter
     */
    public function category(){
        $articles = $this->Article->lastByCategory($_GET['id']);
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $categories = $this->Category->all();
        $this->render('articles.category', compact('articles', 'categorie', 'categories'));
    }
    /**
     * voire un article en particulier
     */
    public function show(){
        $article = $this->Article->findWithCategory($_GET['id']);
        $this->render('articles.show', compact('article'));
    }

    /**
     * getUneCategorie Affiche tous les articles d'une categorie
     * @param $id id de la categorie a afficher
     * @param $nomShow le nom de la categorie a affiher
     */
    public function getUneCategorie($id, $nomShow)
    {
        // charge les models
        $articles = $this->Article->lastByCategory($id); //horaires : id = 2
        $categories = $this->Category->all();
        $this->render($nomShow, compact('articles', 'categories'));
    }

}