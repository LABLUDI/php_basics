<?php

abstract class Person
{
    public string $name;
    public int $age;
    public string $job;

    /**
     * @param string $name
     * @param string $age
     * @param string $job
     */
    public function __construct(string $name, int $age, string $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

    public function sayHello()
    {
        echo 'Hello!';
    }
}

class Developer extends Person
{
    public int $timePerWeek;
    
    public function __construct(string $name, int $age, string $job, int $timePerWeek)
    {
        parent::__construct($name, $age, $job);
        $this->timePerWeek = $timePerWeek;
    }

    public function work()
    {
        echo 'developer is working';
    }
}

$developer = new Developer('Kenny', 20, 'developer', 20);

echo $developer->timePerWeek;

abstract class Building
{
    public string $name;
    public int $floors;
    public string $activity;
    
    public function __construct($name, $floors, $activity) {
        $this->name = $name;
        $this->floors = $floors;
        $this->activity = $activity;
    }
}

class Factory extends Building
{
    public string $color;
    public function __construct(string $name, int $floors, string $activity, $color) {
        $this->color = $color;
        parent::__construct($name, $floors, $activity);
    }
}

$factory = new Factory('The laying hen', 4, 'egg collection', 'red');

echo '</br>';
echo $factory->activity . '</br>';