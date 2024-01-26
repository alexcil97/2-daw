<?php
$n = (isset($_GET["n"])?htmlspecialchars($_GET["n"]):"");

if ($n!=4) {
?>
<form name="miform" method="GET" action="">
	<input type="text" value="" name="n">
	<input type="submit" value="Enviar">
</form>
<?php } else { ?>
Error
<?php } ?>