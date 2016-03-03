<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 03/03/16
 * Time: 09:47
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelContacteAdherent
{
    private $idAdherent;
    private $idUtilisateur;
	public function __construct($idA = NULL, $idU = NULL)
	{
		if (!is_null($idA) && !is_null($idU))
		{
			parent::__construct();
            $this->idAdherent = $idA;
			$this->idUtilisateur = $idU;
        }
    }
}