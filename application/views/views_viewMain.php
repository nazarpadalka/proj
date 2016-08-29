<?php

class views_viewMain extends core_view
{
	function generate($data)
	{
		echo file_get_contents('application\template.html');
		echo file_get_contents('application\Main.html') . $data;
	}
}
