<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:43
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelEleve extends ModelAdherent
{
    protected $idEleve;
    public function __construct($id = NULL)
    {
        if (!is_null($id))
        {
            parent::__construct();
            $this->idEleve = $id;
        }
    }
}
?>
