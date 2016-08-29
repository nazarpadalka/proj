<?php
class validators_validatorCart extends core_validator
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
