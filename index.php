<?php

class Plant
{
    public $title;
    private $color;
    protected $season;

    public function __construct($title, $color, $season)
    {
        $this->title = $title;
        $this->color = $color;
        $this->season = $season;
    }

    private function f()
    {
        $this->color;
    }

}

class Rosa extends Plant
{
    public function fn()
    {
        $this->season = '4';
    }
}

$plant = new Plant('Tulip', 'pink', 'spring');
$rosa = new Rosa('Rosa', 'Red', 'Spring');

echo $rosa->title;
echo $plant->;