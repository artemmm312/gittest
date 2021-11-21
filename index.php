<?php

class Human
{
	public int $age;
	protected string $gender;
	private string $name;

	function getName(): string
	{
		return $this->name;
	}

	function setName(string $name): string
	{
		return $this->name = $name;
	}

	function say(): void
	{
		echo "Hello!!!";
	}
}

class Person extends Human
{

	function __construct(int $age, string $gender, string $name)
	{
		$this->age = $age;
		$this->gender = $gender;
		$this->name = $this->setName($name);
	}


	function say(): void
	{
		echo " Hello, my name is $this->name. I am $this->gender. A am $this->age old.";
	}
}

$human = new Human;
$human->say();

echo "<br>";

$person = new Person(22, "man", "Harry");
$person->say();


$a = 20;
