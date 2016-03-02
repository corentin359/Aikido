
<?php
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class Model_adultes extends Model_eleve
{    
    protected $id_adultes;
	public function __construct($id = NULL)
	{
		if (!is_null($id))
		{
			parent::__construct();
			$this->id_adultes = $id;
        }
    }
}
?>

