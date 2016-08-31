<?php
class core_view
{
	public $data;

	function generate($template, $page, $data)
	{
		require_once 'application/' . $template;
		echo file_get_contents('application/' . $page) . $data;
	}
}