
<?php
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class Model_enseignant extends Model_adherent
{    
    protected $id_enseignant;
	public function __construct($id = NULL)
	{
		if (!is_null($id))
		{
			parent::__construct();
			$this->id_enseignant = $id;
        }
    }
}
?>

