<?php
session_start();
$otv1 = $_POST['otvet1'];
$_SESSION['otvet1'] = $otv1;

?>



<p>Сколько будет 2+3?</p>
<form action="vopros3.php" method="POST">
<input type="textbox" name="otvet2">
<input type="submit" name="otpravka">
</form>

