<?php
session_start();
$otv1 = $_SESSION['otvet1'];
$otv2 = $_SESSION['otvet2'];
$otv3 = $_POST['otvet3'];


if ($otv1 == 4 && $otv2 == 5 && $otv3 == 6) {
	echo 'тест пройден';
} else {
	echo 'Ошибка';
}

?>



