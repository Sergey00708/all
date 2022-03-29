<?php

class obwee
{
	public $name;
	public $weight;
	public $ColorGlaz;

	public function __construct($name,$weight,$ColorGlaz)
	{
		$this->name = $name;
		$this->weight = $weight;
		$this->ColorGlaz = $ColorGlaz;
	}

	public function Say($say) 
	{
		echo 'говорит'.' '."$say";
	}

	public function show()
	{
		return "{$this->name}"."{$this->weight}"."{$this->ColorGlaz}";
	}
}


class Cat extends obwee
{
	
}

$Cat1 = new Cat('Вася','30','Коричневый');
echo 'кот'.' '."$Cat1->name".' '.'вес'.' '."$Cat1->weight".' '.'глаза'.' '."$Cat1->ColorGlaz";
echo "<br>";
$Cat1->Say('Мяу');
echo "<br>";


class Guy extends Cat
{
	public function Name()
	{
		echo 'говорит'.' '.'Меня зовут'. " $this->name";
	}
}
$Guy1 = new Guy('Сергей', '74', 'Голубой');
echo 'Парень'.' '."$Guy1->name".' '.'вес'.' '."$Guy1->weight".' '.'глаза'.' '."$Guy1->ColorGlaz";
echo "<br>";
$Guy1->Name();
//  ПРИМЕР НАСЛЕДОВАНИЯ!!!!!

var_dump($Guy1 instanceof Cat);

