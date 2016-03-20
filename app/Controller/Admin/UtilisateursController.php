<?php
namespace App\Controller\Admin;

class UtilisateursController extends AppController
{
        public function __construct(){
        parent::__construct();
        $this->loadModel('Utilisateur');// créé une variable 'Utilisateur' contenant la conexion au model Utilisateur
    }
    /**
     * index affiche les utilisateurs affin de les administrer
     */
    public function index(){
        $items = $this->Utilisateur->all();
        $this->render('admin.utilisateurs.index', compact('items'));
    }

    /**
     * add Permet l'ajoute d'un utilisateur
     */
    public function add(){
        if (!empty($_POST)) {
            $result = $this->Utilisateur->create([
                'login' => $_POST['login'],
                'motDePasse' => $_POST['motDePasse'],
                'numeroLicence' => $_POST['numeroLicence'],
                'dateNaissance' => $_POST['dateNaissance'],
                'grade' => $_POST['grade'],
                'certificatMedical' => $_POST['certificatMedical'],
                'role' => $_POST['role'],
                'idContacte' => $_POST['idContacte']

            ]);
            return $this->index();
        }
        $this->loadModel('InformationsPersonnelle');
        $informationsPersonnelle = $this->InformationsPersonnelle->all();
        $this->render('admin.utilisateurs.edit', compact('informationsPersonnelle'));
    }
    /**
     * edit Permet de modifier un utilisateur
     */
    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Utilisateur->update($_GET['id'], [
                'login' => $_POST['login'],
                'motDePasse' => $_POST['motDePasse'],
                'numeroLicence' => $_POST['numeroLicence'],
                'dateNaissance' => $_POST['dateNaissance'],
                'grade' => $_POST['grade'],
                'certificatMedical' => $_POST['certificatMedical'],
                'role' => $_POST['role'],
                'idContacte' => $_POST['idContacte']
            ]);
            return $this->index();
        }
        $utilisateur = $this->Utilisateur->find($_GET['id']);
        $this->loadModel('InformationsPersonnelle');
        $informationsPersonnelle = $this->InformationsPersonnelle->all();
        $this->render('admin.utilisateurs.edit', compact('utilisateur','informationsPersonnelle'));
    }
    /**
     * delete Suprime un utilisateur
     */
    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Utilisateur->delete($_POST['id']);
            return $this->index();
        }
    }
}