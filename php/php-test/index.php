<?php

class Being {
	public $genus = 'Homo Sapien';
}

class Person {
	public $name = 'James';
}

class Limbs {
	private $limb_count = 4;
}


$person = new Person;
// give $person the attributes required for the string below to output correctly.

echo $person->name.' is a '.$person->genus.' with '.$person->limb_count.' limb(s).';
