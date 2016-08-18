<?php
require_once 'inputCheck.php';
class inputCheckCart extends inputCheck
{
	public function Check()
	{
		$str = $_POST['textOfCards'];
        if (!empty($str)){
            $regular = preg_match('[\d|A|Q|K|J]+[B|C|D|E]', $str);
            if ($regular != 1){
                $str = null;
                echo "Error";
            }
        }
		return $str;
	}
}
