<style>
form.muestra {
    display: block;
}

form.oculta {
    display: none;
}
</style>
<?php
$n = (isset($_GET["n"])?htmlspecialchars($_GET["n"]):"");

if ($n!=4) {
	$mostrar = "muestra";
} else {
	$mostrar = "oculta";
}
?>
<form name="miform" method="GET" action="" class='<?=$mostrar?>'>
	<input type="text" value="" name="n">
	<input type="submit" value="Enviar">
</form>
