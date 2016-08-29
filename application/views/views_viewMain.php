<?php

class views_viewMain extends core_view
{
	function generate($template, $main, $data)
	{
		require_once 'application/' . $template;
		echo $main . $data;
	}
}
