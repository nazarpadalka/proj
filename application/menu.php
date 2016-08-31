<?php
$menu[$position]['url']='/';
$menu[$position]['name']='Main';

$menu[++$position]['url']='index.php?act=Cart';
$menu[$position]['name']='Sorting';

foreach($menu as $url) {
   $output = $output . (($_SERVER["REQUEST_URI"] == $url['url']) ? ('<li class="active">' . '<a href="' . $url['url'] . '">' . $url['name'] . "</a></li>\n")
           : ('<li>' . '<a href="' . $url['url'] . '">' . $url['name'] . "</a></li>\n"));
}

echo $output;