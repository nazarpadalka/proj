<?php
require_once 'application\core\view.php';
/**
 *Класс для отображения контента страницы с сортировкой карт
 */
class ViewCart extends View
{
	function generate($teplate, $content, $data)
	{
		echo $teplate . $content . $data;
	}
}
