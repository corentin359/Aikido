
<?php
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class Model_eleve extends Model_adherent
{    
    protected $id_eleve;
	public function __construct($id = NULL)
	{
		if (!is_null($id))
		{
			parent::__construct();
			$this->id_eleve = $id;
        }
    }
}
?>

