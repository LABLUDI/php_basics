<?php

class Person
{
    public $name = 'Alex';
    public $age = '25';
    public $job = 'Developer';

    /**
     * @param string $name
     * @param string $age
     * @param string $job
     */
    public function __construct(string $name, string $age, string $job)
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
    public function work()
    {
        echo 'developer is working';
    }
}

class Director extends Person
{
    public function work()
    {
        echo 'director is working';
    }
}

class Manager extends Person
{
    public function work()
    {
        echo 'manager is working';
    }
}

class Doctor extends Person
{
    public function work()
    {
        echo 'doctor is working';
    }
}

class Teacher extends Person
{
    public function work()
    {
        echo 'Teacher is working';
    }
}

class Engineer extends Person
{
    public function work()
    {
        echo 'Engineer is working';
    }
}

class Lawyer extends Person
{
    public function work()
    {
        echo 'Lawyer is working';
    }
}

class Programmer extends Person
{
    public function work()
    {
        echo 'Programmer is working';
    }
}

class Artist extends Person
{
    public function work()
    {
        echo 'Artist is working';
    }
}

class Nurse extends Person
{
    public function work()
    {
        echo 'Nurse is working';
    }
}

class Chef extends Person
{
    public function work()
    {
        echo 'Chef is working';
    }
}

class Architect extends Person
{
    public function work()
    {
        echo 'Architect is working';
    }
}

class Writer extends Person
{
    public function work()
    {
        echo 'Writer is working';
    }
}

$doctor = new Doctor('Artem', 34, 'doctor');
$teacher = new Teacher('Alexey', 45, 'teacher');
$engineer = new Engineer('Ilya', 28, 'engineer');

echo $doctor->name . '</br>';
echo $teacher->name . '</br>';
echo $engineer->name . '</br>';