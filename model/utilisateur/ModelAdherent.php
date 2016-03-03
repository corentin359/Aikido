
<?php
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelAdherent extends ModelUtilisateur
{    
	protected $id_adherent;
//	Informations personnelles 2
	protected $numero_licence_adherent;
	protected $date_naissance_adherent;
	protected $loging_adherent;
	protected $mot_de_passe_adherent;
	protected $grade_adherent;
	protected $certificat_medical_adherent;

	public function __construct($id = NULL, $numero_licence = NULL, $date_naissance = NULL, $loging = NULL, $mot_de_passe = NULL, $grade = NULL, $certificat_medical = NULL)
	{
		if (!is_null($id) &&
		!is_null($numero_licence) &&
		!is_null($date_naissance) &&
		!is_null($loging) &&
		!is_null($mot_de_passe) &&
		!is_null($grade) && 
		!is_null($certificat_medical))
		{
			parent::__construct();
			$this->id_adherent = $id;
			$this->numero_licence_adherent = $numero_licence;
			$this->date_naissance_adherent = $date_naissance;
			$this->loging_adherent = $loging;
			$this->mot_de_passe_adherent = $mot_de_passe;
			$this->grade_adherent = $grade;
			$this->certificat_medical_adherent = $certificat_medical;
        }
    }
}
?>

