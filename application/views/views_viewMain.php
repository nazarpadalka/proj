<?php

class views_viewMain extends core_view
{
	function generate($template, $main, $data)
	{
		echo $template;
		echo $main . $data;
	}
}
