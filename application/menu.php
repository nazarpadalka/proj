<?php

$menu[$position]['url']='/';
$menu[$position]['name']='Main';

$menu[++$position]['url']='index.php?act=Cart';
$menu[$position]['name']='Carts';

echo "<ul>\n";
foreach($menu as $url)
{
    echo ($_SERVER["REQUEST_URI"] = $url['url']) ? '<li class="active">': '<li>';
    echo '<a href="' . $url['url'] . '">' . $url['name'] . "</a></li>\n";
}
echo "</ul>";