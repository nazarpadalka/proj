<?php
class views_viewCart extends core_view
{
	function generate($template, $cart, $data)
	{
		echo $template;
		echo $cart . $data;
	}
}
