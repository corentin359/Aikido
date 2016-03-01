<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:45
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelMembreDuBureau extends ModelAdherent
{
    protected $idMembreDuBureau;
    protected $roleMembreDuBureau;
    public function __construct($id = NULL, $role = NULL)
    {
        if (!is_null($id) && !is_null($role))
        {
            parent::__construct();
            $this->idMembreDuBureau = $id;
            $this->roleMembreDuBureau = $role;
        }
    }
}
?>
