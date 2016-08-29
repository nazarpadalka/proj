<?php
class core_view
{
	public $data;

	function generate($data)
	{
		echo file_get_contents('application\template.html');
		echo $data;
	}
}