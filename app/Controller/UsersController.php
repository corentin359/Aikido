<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use \App;
use Core\HTML\BootstrapForm;

class UsersController extends AppController {

    /**
     * Permet aux administrateurs de se connecter
     */
    public function login(){
        $errors = false;
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

}