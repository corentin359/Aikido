<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController{

    /**
     * PostsController constructor.
     * charge les model Post et Category
     */
    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');

    }
    /**
     * page d'accueil qui liste les différent article
     */
    public function index(){
        // charge les models
        $posts = $this->Post->last();
        $categories = $this->Category->all();
        // affiche la vue
        $this->render('posts.index', compact('posts', 'categories'));//$x=5 compact(x) créé un tableau x=>5
    }
    /**
     * la categorie que l'on souhaite consulter
     */
    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles', 'categories', 'categorie'));
    }
    /**
     * voire un article en particulier
     */
    public function show(){
        $article = $this->Post->findWithCategory($_GET['id']);
        $this->render('posts.show', compact('article'));
    }

}