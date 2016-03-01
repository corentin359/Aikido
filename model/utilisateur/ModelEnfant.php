<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:43
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelEnfant extends ModelEleve
{
    protected $idEnfant;
    protected $ceintureEnfant;
    protected $barretteEnfant;
    public function __construct($id = NULL, $ceinture = NULL, $barrette = NULL)
    {
        if (!is_null($id) && !is_null($ceinture) && !is_null($barrette))
        {
            parent::__construct();
            $this->idEnfant = $id;
            $this->ceintureEnfant = $ceinture;
            $this->barretteEnfant = $barrette;
        }
    }
    public static function getAllEnfant() {
        try {
            $rep = Model::$pdo->query("SELECT * FROM Enfants");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelEnfant');
            return $rep->fetchAll();
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour à la page d\'accueil </a>';
            }
        }
    }
    public function getCeintureEnfant()
    {
        return $this->ceintureEnfant;
    }
}
?>
