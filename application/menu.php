<?php

$menu[$i=0]['url']='/';
$menu[$i]['name']='Main';

$menu[++$i]['url']='index.php?act=Cart';
$menu[$i]['name']='Carts';
var_dump($menu);

echo "<ul>\n";
foreach($menu as $url)
{
    echo ($_SERVER["REQUEST_URI"] = $url['url']) ? '<li class="active">': '<li>';
    echo "<a href=\"".$url['url']."\">".$url['name']."</a></li>\n";
}
echo "</ul>";

?>