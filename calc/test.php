<?php  

$a =100; //тип данных целое число. Интеггер (int)
$b =15.12; //дробь (float)
$c ='Fenix'; //строка string (str)
$d = array(1,2,3,4,5); //массив данных, не одно значение
echo"<pre>";
print_r($d);

$f = array(
	'name' => 'Fenix', 
	'surname' => 'Litv',
	'age' => 30,
	'byear' => 1990,
	'education' => array('school in 2000', 'collage in 2010'),
	'smoking' => false,
	'geek' => true);
// ассоциативный массив 
$g = false;
$j = true; //булево значение правда или ложь

echo "$a</br>";
echo "$b</br>";
echo "$d[0]</br>";
echo $f['education'][0],"<br>";
//''апострофы считывают инфу как текст
//""кавычки выводять значение переменной
$name = 'Fenix';
$surname = 'Litv';
echo "$name $surname</br>"; //конкатенация, обьединение двух строк

echo 5+10,"<br>";

$age = 20;
if ($age < 24) {
	echo 'Вы еще слишком малы для клуба',"<br>";
}
if ($age >= 24) {
	echo 'Можете входить',"<br>";
}
 
 $min = 1;
 $max = 500;
 $n = rand($min,$max);
 echo 'Случайное число'." ".$n,"<br>";

 if ($_POST['submit']) {
 	$a = (int) $_POST['first'];
 	$b = (int) $_POST['second'];
 	$p = $_POST['operation'];
 	$c;
 	if($p=='+')
 		$c = $a + $b;
 	else if ($p=='-')
 		$c = $a - $b;
 	else if ($p=='*')
 		$c = $a * $b;
 	else if ($p=='/')
 		$c = $a / $b;
} 
	echo $c;
 ?>
 
 <form action="" method="post">
 <nobr><input type="textbox" name="first" required>

 <select name="operation" required>
 <option value="+">+</option>
 <option value="-">-</option>
 <option value="*">*</option>
 <option value="/">/</option>
 </select>

 <input type="textbox" name="second" required>

 <input type="submit" name="submit"></nobr>	
 </form
 
