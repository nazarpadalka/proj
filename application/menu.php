<?php

$menu[$position]['url']='/';
$menu[$position]['name']='Главная';

$menu[++$position]['url']='index.php?act=Cart';
$menu[$position]['name']='Сортировка';

foreach($menu as $url)
{
    echo ($_SERVER["REQUEST_URI"] == $url['url']) ? '<li class="active">' : '<li>';
    echo '<a href="' . $url['url'] . '">' . $url['name'] . "</a></li>\n";
}
