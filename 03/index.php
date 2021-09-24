<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car1->color = 'черный';
$car1->brand = 'Volvo';

$car2 = new Car();
$car2->color = 'белый';
$car2->brand = 'Mersrsedes';

//echo "<h3>О моем автомобиле</h3>
//Цвет авто: $car1->color<br>
//марка авто: $car1->brand<br>
//Колличество колес: $car1->wheels<br>
//Скорость: $car1->speed";

echo $car1->getCarInfo();
echo $car2->getCarInfo();