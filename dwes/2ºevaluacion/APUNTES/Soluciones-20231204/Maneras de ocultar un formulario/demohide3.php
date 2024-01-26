<?php
$n = (isset($_GET["n"])?htmlspecialchars($_GET["n"]):"");

if ($n!=4) {
	$mostrar = "display:block;";
} else {
	$mostrar = "display:none;";
}
?>
<form name="miform" method="GET" action="" style='<?=$mostrar?>'>
	<input type="text" value="" name="n">
	<input type="submit" value="Enviar">
</form>
