<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="Sergey.php" method="POST">
<input type="Textbox" name="first">
<select name="operetion">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
</select>
<input type="Textbox" name="second">
<input type="submit" name="вычислить" value="вычислить">

</form>
<?php
if ($_POST[вычислить]) {
	$a = $_POST[first];
	$b = $_POST[second];
	$p = $_POST[operetion];
	$c;
}
	if ($p=='+') {
		$c = $a + $b;
}
	elseif ($p=='-') {
		$c = $a - $b;
}
	elseif ($p=='*') {
		$c = $a * $b;
}
	elseif ($p=='/') {
		$c = $a / $b;
}

echo "$c";
require('test.html');

?>
</body>
</html>



