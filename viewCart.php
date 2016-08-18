<?php
require_once 'view.php';
/**
 *Класс для отображения контента страницы с сортировкой карт
 */
class ViewCart extends View
{
	function generate($content, $data){

		echo $content.$data;
	}
}
