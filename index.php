<?php

class Person
{
    public $name = 'Alex';
    public $age = '25';
    public $isMarried = false;

    public function sayHello()
    {
        echo 'Hello my friends!</br>';
    }
}

$person = new Person();

$person->sayHello();

class Course
{
    public string $course = 'PHP DEVELOPER';
    public string $description = 'Курс "PHP Developer" предназначен для тех, кто стремится стать квалифицированным PHP-разработчиком. ';
    public string $teacher = 'Leo';
    public array $students =
        [
            'Пьер' => [
                'first_name' => 'Пьер',
                'last_name' => 'Безухов',
                'age' => '20'
            ],
            'Наташа' => [
                'first_name' => 'Наташа',
                'last_name' => 'Ростова',
                'age' => '17'
            ],
            'Андрей' => [
                'first_name' => 'Андрей',
                'last_name' => 'Болконский',
                'age' => '25'
            ],
            'Анна' => [
                'first_name' => 'Анна',
                'last_name' => 'Шерер',
                'age' => '50'
            ],
            'Долохов' => [
                'first_name' => 'Долохов',
                'age' => '30'
            ],
            'Марья' => [
                'first_name' => 'Марья',
                'last_name' => 'Болконская',
                'age' => '20'
            ]
        ];

}

$course = new Course;

echo $course->description . '</br>';

foreach ($course->students as $key => $student) {
    echo 'Student: ' . $key . '</br>';
    foreach ($student as $k => $v) {
        echo $k . ': ' . $v . '</br>' . 'Направление: ' . $course->course . '</br>';
    }
}
