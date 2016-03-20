<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use \App;

class UtilisateursController extends AppController {

    /**
     * Permet aux administrateurs de se connecter
     */
    public function login(){
        $error = $this->getError();
        $this->render('utilisateurs.login', compact('error'));
    }

    /**
     * getError Verifi si l'utilisateur a bien mi la bonne combineson loging mot de passe
     * @return bool return 'true' si il y a une erreur sinon 'false'
     */
    private function getError()
    {
        $error = false;
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['login'], $_POST['motDePasse'])){
                header('Location: index.php?p=admin.accueil.show');
            } else {
                $error = true;
            }
        }
        return $error;
    }

}