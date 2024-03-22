<?php

class Person
{
    public $name = 'Alex';
    public $age = '25';
    public $isMarried = false;

    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getName() {
       return $this->name;
    }
    public function getAge() {
       return $this->age;
    }
    public function sayHello()
    {
        echo 'Hello my friends!</br>';
    }
}

$person = new Person();
$person2 = new Person();
$person3 = new Person();


echo $person->name . '</br>';
echo $person2->name . '</br>';
echo $person3->name . '</br>';

$person2->setName('Leo');
$person3->setName('Li');

echo '</br>';
echo $person->name . '</br>';
echo $person2->name . '</br>';
echo $person3->name . '</br>';

echo '</br>';
echo $person->age . '</br>';
echo $person2->age . '</br>';
echo $person3->age . '</br>';

$person2->setAge(29);
$person3->setAge(97);

echo '</br>';
echo $person->age . '</br>';
echo $person2->age . '</br>';
echo $person3->age . '</br>';

echo '</br>';
echo $person->getName() . '</br>';
echo $person2->getName() . '</br>';
echo $person3->getName() . '</br>';

echo '</br>';
echo $person->getAge() . '</br>';
echo $person2->getAge() . '</br>';
echo $person3->getAge() . '</br>';

class Pet {
    public $name = 'Willie';
    public $age = 3;
    public $type = 'dog';
    
    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function setType($type) {
        $this->type = $type;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getType() {
        return $this->type;
    }
}

$pet = new Pet();
$pet2 = new Pet();
$pet3 = new Pet();

echo '</br>';
echo $pet->getName() . '</br>';
echo $pet->getAge() . '</br>';
echo $pet->getType() . '</br>';

echo '</br>';
echo $pet2->setName('Ku') . '</br>';
echo $pet2->setAge(12) . '</br>';
echo $pet2->setType('Rat') . '</br>';
echo $pet2->getName() . '</br>';
echo $pet2->getAge() . '</br>';
echo $pet2->getType() . '</br>';

echo '</br>';
echo $pet3->setName('Storm') . '</br>';
echo $pet3->setAge(5) . '</br>';
echo $pet3->setType('Cat') . '</br>';
echo $pet3->getName() . '</br>';
echo $pet3->getAge() . '</br>';
echo $pet3->getType() . '</br>';

