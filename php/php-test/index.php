<?php

class Being {
	private $genus = 'Homo Sapien';
}

class Person {
	public $name = 'James';
}

$child = new Person;

echo $child->name.' is a '.$child->genus;
