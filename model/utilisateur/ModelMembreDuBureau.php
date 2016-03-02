
<?php
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class ModelMembreDuBureau extends Model_adherent
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
