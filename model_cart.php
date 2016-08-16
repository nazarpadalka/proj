<?php
require_once 'model.php';
class Model_cart extends model
{
	public function get_data()
	{
        $d = $_POST['textOfCards'];
        return $d;
	}

}
