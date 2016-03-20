<?php
namespace App\Controller\Admin;
class InformationsPersonnellesController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('InformationsPersonnelle');// créé une variable 'InformationsPersonnelle' contenant la conexion au model InformationsPersonnelle
    }
    /**
     * index affiche les informations personnelle affin de les administrer
     */
    public function index(){
        $items = $this->InformationsPersonnelle->all();
        $this->render('admin.informationsPersonnelles.index', compact('items'));
    }

    /**
     * add Permet l'ajoute d'informations personnelle
     */
    public function add(){
        if (!empty($_POST)) {
            $result = $this->InformationsPersonnelle->create([
                'sexe' => $_POST['sexe'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'adresseEMail' => $_POST['adresseEMail'],
                'ville' => $_POST['ville'],
                'rue' => $_POST['rue'],
                'codePostal' => $_POST['codePostal'],
                'telephone' => $_POST['telephone']

            ]);
            return $this->index();
        }
        $this->render('admin.informationsPersonnelles.edit');
    }
    /**
     * edit Permet de modifier une informations personnelle
     */
    public function edit(){
        if (!empty($_POST)) {
            $result = $this->InformationsPersonnelle->update($_GET['id'], [
                'sexe' => $_POST['sexe'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'adresseEMail' => $_POST['adresseEMail'],
                'ville' => $_POST['ville'],
                'rue' => $_POST['rue'],
                'codePostal' => $_POST['codePostal'],
                'telephone' => $_POST['telephone']
            ]);
            return $this->index();
        }
        $informationsPersonnelle = $this->InformationsPersonnelle->find($_GET['id']);
        $this->render('admin.informationsPersonnelles.edit', compact('informationsPersonnelle'));
    }
    /**
     * delete Suprime une "informations personnelle"
     */
    public function delete(){
        if (!empty($_POST)) {
            $result = $this->InformationsPersonnelle->delete($_POST['id']);
            return $this->index();
        }
    }
}