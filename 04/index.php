<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car('черный', 4, 180, 'Volvo');
$car2 = new Car('белый', 4, 200, 'Mersrsedes');


echo $car1->getCarInfo();
echo $car2->getCarInfo();