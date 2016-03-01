<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:42
 */
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelAdherent extends ModelUtilisateur
{
    protected $idAdherent;
//	Informations personnelles 2
    protected $numeroLicenceAdherent;
    protected $dateNaissanceAdherent;
    protected $logingAdherent;
    protected $motDePasseAdherent;
    protected $gradeAdherent;
    protected $certificatMedicalAdherent;

    public function __construct($id = NULL, $numeroLicence = NULL, $dateNaissance = NULL, $loging = NULL, $motDePasse = NULL, $grade = NULL, $certificatMedical = NULL)
    {
        if (!is_null($id) &&
            !is_null($numeroLicence) &&
            !is_null($dateNaissance) &&
            !is_null($loging) &&
            !is_null($motDePasse) &&
            !is_null($grade) &&
            !is_null($certificatMedical))
        {
            parent::__construct();
            $this->idAdherent = $id;
            $this->numeroLicenceAdherent = $numeroLicence;
            $this->dateNaissanceAdherent = $dateNaissance;
            $this->logingAdherent = $loging;
            $this->motDePasseAdherent = $motDePasse;
            $this->gradeAdherent = $grade;
            $this->certificatMedicalAdherent = $certificatMedical;
        }
    }
}
?>
