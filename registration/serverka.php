<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$fhone = $_POST['fhone'];
$pass = $_POST['pass'];

$con = mysqli_connect('localhost', 'root', 'root', 'test_baza');
mysqli_query ($con, "INSERT INTO `dance` (`id`, `name`, `surname`, `fhone`, `pass`) VALUES (NULL, '$name', '$surname', '$fhone', '$pass')");

header('Location:forma.html');
?>