<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:45
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelParent extends ModelUtilisateur
{
//	protected ou pas ?
    protected $idParent;
    public function __construct($id = NULL)
    {
        if (!is_null($id))
        {
            parent::__construct();
            $this->idParent = $id;
        }
    }
}
?>
