<?php

require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();
//debug($car1);

$car1->color = 'черный';
$car1->brand = 'Volvo';
$car1->speed = 200;

$car2->color = 'белый';
$car2->brand = 'ВАЗ';
$car2->speed = 250;

//debug($car1);
//debug($car2);
echo "<h3>О моем автомобиле</h3>
Цвет авто: $car1->color<br>
марка авто: $car1->brand<br>
Колличество колес: $car1->wheels<br>
Скорость: $car1->speed";