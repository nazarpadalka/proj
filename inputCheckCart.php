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
        var_dump($str);
        if (!empty($str)){
            $regular = preg_match("/[\d|A|Q|K|J]+[B|C|D|E]/", $str);
            if ($regular != 1){
                $str = null;
            }
        }
		return $str;
	}
}
