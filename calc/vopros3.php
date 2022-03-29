<?php
session_start();
$otv2 = $_POST['otvet2'];
$_SESSION['otvet2'] = $otv2;

?>


<p>Сколько будет 2+4?</p>
<form action="rezultat.php" method="POST">
<input type="textbox" name="otvet3">
<input type="submit" name="otpravka">
</form>


