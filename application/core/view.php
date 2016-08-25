<?php
/**
 * Корневой класс отображения контента
 */
class View
{
	public $data;

	function generate($teplate, $content, $data)
	{
		echo $teplate . $content . $data;
	}
}