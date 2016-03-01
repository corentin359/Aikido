<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:44
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelEnseignant extends ModelAdherent
{
    protected $idEnseignant;
    public function __construct($id = NULL)
    {
        if (!is_null($id))
        {
            parent::__construct();
            $this->idEnseignant = $id;
        }
    }
}
?>
