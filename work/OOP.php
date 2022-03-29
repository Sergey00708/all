<?php

/*class guy{
	public $name;
	public $age;
	public $vait;

	public function say ()
	{
		echo $this->name.$this->age.$this->vait;
	}
}

$obj1 = new guy();
$obj1->name = 'Sergey';
$obj1->age = '30';
$obj1->vait = '74';

$obj2 = new guy();
$obj2->name = 'Vadim';
$obj2->age = '27';
$obj2->vait = '100';

$obj3 = new guy();
$obj3->name = 'Bob';
$obj3->age = '50';
$obj3->vait = '90';

$obj1->say();*///1 вариант создания и вывода обьекта



class guy {
	public $name;
	public $age;
	public $vait;
	
	public function __construct($name,$age,$vait)
	{
		$this->name = $name;
		$this->age = $age;
		$this->vait = $vait;
	}

	public function pocaz ()
	{
		return "{$this->name}"."{$this->age}"."{$this->vait}";
	}
}

$obj1 = new guy("Sergey","30","74");
$obj2 = new guy("Vadim","27","100");
$obj3 = new guy("Bob","50","90");

echo $obj1->pocaz(); // второй способ, более короткий создания обьекта.
?>