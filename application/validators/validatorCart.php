<?php
require_once 'application\core\validator.php';
class validatorCart extends validator
{
	public function Check()
	{
		$str = $_POST['textOfCards'];
        $input = false;
        if ($str != ''){
            if (preg_match("/[\d|A|Q|K|J]+[B|C|D|E]/", $str) != 1){
                $input = true;
            }
        }
        return $input;
	}
}
