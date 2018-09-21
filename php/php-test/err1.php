<?php

class Being {
	private $genus = 'Homo Sapien';
}

class Person {
	public $name = 'Steve';
}

$child = new Person;

echo $child->name.' is a '.$child->genus;

echo '<hr/>';

echo '<a href="err2.php">Next</a>';
