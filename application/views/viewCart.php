<?php
require_once 'application\core\view.php';
class ViewCart extends View
{
	function generate($teplate, $content, $data)
	{
		echo $teplate . $content . $data;
	}
}
