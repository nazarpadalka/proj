<h1>CARTS</h1>
<body>
<center>
	<p><br><br><br> Input cart code <br> example: 6B,6E,AC,QB,1B,QE <br></p>

	<form method="POST" action="controller_cart.php"
		<p><input type="submit" value="OK" name="button"></p>
		<p></p> <input type="text" name="textOfCards"><p></p>
	</form>
</center>
</body>
<?php
// в форме выше я передаю в файл контроллер сдержимое текстбара
require_once 'controller.php';   // не обращай внимания на кол-во рекваиров, это я методом проб и ошибок исследовал как они работают,
require_once 'model.php';       
require_once 'view.php';

/*public class viev_cart extends viev{
    $data = 'data';
    echo $data;

}*/
?>
</table>

