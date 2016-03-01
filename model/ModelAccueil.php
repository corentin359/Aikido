<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:47
 */
require_once "Model.php";

class ModelAccueil {

    private $photoAccueil = 'photoAccueil.jpg';

    public function __construct($photo = NULL) {
        if (!is_null($photo)) {
            $this->photoAccueil = $photo;
        }
    }

    public static function getPhoto() {
        try {
            $rep = Model::$pdo->query("SELECT * FROM PhotoAccueil");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelPhoto');
            return $rep->fetchAll();
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                return false;
            }
        }
    }

}
?>
