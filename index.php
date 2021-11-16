<?php

class Human {
	public $age ;
	protected $gender;
	private $name;

	function getName () {
		return $this->name;
	}

	function setName ($name) : string {
		return $this->name = $name;
	}

	function say() {
		echo "Hello!!!";
	}
}

class Person extends Human{

	function __construct($age, $gender, $name)
	{
		$this->age = (int)$age;
		$this->gender = (string)$gender;
		$this->name = $this->setName($name);
	}


	function say() {
		echo " Hello, my name is $this->name. I am $this->gender. A am $this->age old.";
	}
}

$human = new Human;
$human->say();

echo "<br>";

$person = new Person(22,"man", "Harry");
$person->say();



