<?php
require_once 'inputCheck.php';
/**
 * Doc-блок здесь
 */
class inputCheckCart extends inputCheck
{
	public function Check()
	{
		$str = $_POST['textOfCards'];
        if ($str != ''){
            if (preg_match("/[\d|A|Q|K|J]+[B|C|D|E]/", $str) != 1){
                $str = "error";
            }
        }
        return $str;
	}
}
