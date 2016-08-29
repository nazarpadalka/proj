<?php
class views_viewCart extends core_view
{
	function generate($data)
	{
		echo file_get_contents('application\template.html');
		echo file_get_contents('application\cart.html') . $data;
	}
}
