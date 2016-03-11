<?php
/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 11/03/16
 * Time: 15:23
 */

namespace App\Controller;


class HomeController extends AppController{

    public function show(){
        if (isset($_GET['club'])){
            $club = $_GET['club']; // recupère l'action passée dans l'URL
        }
        else
            $club = "accueil";
        $this->render('home.index',compact('club'));
    }
}