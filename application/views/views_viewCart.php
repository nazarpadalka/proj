<?php
class views_viewCart extends core_view
{
	function generate($template, $cart, $data)
	{
		require_once 'application/' . $template;
		echo $cart . $data;
	}
}
