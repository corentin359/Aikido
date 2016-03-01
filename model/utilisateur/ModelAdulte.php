<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:42
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelAdultes extends ModelEleve
{
    protected $idAdultes;
    public function __construct($id = NULL)
    {
        if (!is_null($id))
        {
            parent::__construct();
            $this->idAdultes = $id;
        }
    }
}
?>
