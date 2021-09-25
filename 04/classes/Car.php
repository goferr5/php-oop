<?php
class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    public function getCarInfo(){
        return "<h3>О моем автомобиле</h3>
            Цвет авто: $this->color<br>
            марка авто: $this->brand<br>
            Колличество колес: $this->wheels<br>
            Скорость: $this->speed<br>";

    }

    public function __destruct()
    {
        var_dump($this);
    }

}