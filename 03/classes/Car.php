<?php
class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function getCarInfo(){
        return "<h3>О моем автомобиле</h3>
            Цвет авто: $this->color<br>
            марка авто: $this->brand<br>
            Колличество колес: $this->wheels<br>
            Скорость: $this->speed";

    }

}