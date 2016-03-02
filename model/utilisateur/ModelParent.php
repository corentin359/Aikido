
<?php
require_once "{$ROOT}{$DS}model{$DS}Model.php";
class Model_parent extends ModelUtilisateur
{    
//	protected ou pas ?
    protected $id_parent;
	public function __construct($id = NULL)
	{
		if (!is_null($id))
		{
			parent::__construct();
			$this->id_parent = $id;
        }
    }
}
?>

