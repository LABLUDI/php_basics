<?php

class Person
{
    public $name = 'Alex';
    public $age = '25';
    public $hobby = 'basketball'; 
    public $isMarried = false;
    
    public function __construct($name, $age, $hobby, $isMarried)
    {
        echo 'CONSTRUCT</br>';
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
        $this->isMarried = $isMarried;
    }

    public function setProperty($name, $age, $hobby, $isMarried): void
    {
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
        $this->isMarried = $isMarried;
    }
}

//$person = new Person();
//$person->setProperty('GTX', 1070, 'Game', true);
//
//$person2 = new Person();
//$person2->setProperty('Al', 47, 'work', true);

$person = new Person('Genri', 3, 'riw', true);

echo $person->name . '</br>';
//echo $person2->name . '</br>';

class Bistro {
    public string $sushi;
    public string $tempura;
    public string $sauce;
    public string $salad;
    public string $drink;
    
    public function __construct($sushi, $tempura, $sauce, $salad, $drink)
    {
        echo $this->sushi = $sushi . '</br>';
        echo $this->tempura = $tempura . '</br>';
        echo $this->sauce = $sauce . '</br>';
        echo $this->salad = $salad . '</br>';
        echo $this->drink = $drink . '</br>';
    }
}

$bistro = new Bistro('Bright salmon', 'Ardent shrimp', 'Lava Sauce', 'Caesar with chicken', 'fruit drink');