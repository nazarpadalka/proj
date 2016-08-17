<?php
require_once 'inputCheck.php';
class inputCheckCart extends inputCheck
{
	public function Check()
	{
		$str = $_POST['textOfCards'];
        if (!empty($str)){
            if ($str = '/[0-9a-z_]'){
                $str = "error";
            }
        }
		return $str;
	}
}
