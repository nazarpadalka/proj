<?php
class core_view
{
	public $data;

	function generate($template, $page, $data)
	{
		echo $template;
		echo $page . $data;
	}
}