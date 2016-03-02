
<?php
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelUtilisateur
{    
//	protected ou protected ?
    protected $idUtilisateur;
//	Informations personnelles 1
    protected $sexeUtilisateur;
    protected $nomUtilisateur;
    protected $prenomUtilisateur;
    protected $adresseEMailUtilisateur;
	protected $telephoneUtilisateur;
//	Adresse postale
    protected $villeUtilisateur;
    protected $rueUtilisateur;
    protected $codePostalUtilisateur;
	public function __construct($id = NULL, $sexe = NULL, $nom = NULL, $prenom = NULL, $adresseEMail = NULL, $telephone = NULL, $ville = NULL, $rue = NULL, $codePostal = NULL)
	{
		if (!is_null($id) &&
		!is_null($sexe) &&
		!is_null($nom) &&
		!is_null($prenom) &&
		!is_null($adresseEMail) &&
		!is_null($telephone) &&
		!is_null($ville) &&
		!is_null($rue) &&
		!is_null($codePostal))
		{
			$this->idUtilisateur = $id;
			$this->sexeUtilisateur = $sexe;
			$this->nomUtilisateur = $nom;
			$this->prenomUtilisateur = $prenom;
			$this->adresseEMailUtilisateur = $adresseEMail;
			$this->telephoneUtilisateur = $telephone;
			$this->villeUtilisateur = $ville;
			$this->rueUtilisateur = $rue;
			$this->codePostalUtilisateur = $codePostal;
        }
    }
    public function getNomUtilisateur()
	{
        return $this->nomUtilisateur;
	}
}
?>

