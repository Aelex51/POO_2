<?php
require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';

/*création instance classe bicycle*/

$bike = new Bicycle('blue', 15);      


/*echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow', 15);
$tornado = new Bicycle('black', 20);


/*création instance classe Car*/

/*$car = new Car('red', 4, 'gasoline');
$car->setCurrentCarSpeed(15);
$car->setEnergyLevel(80);
var_dump($car);

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentCarSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentCarSpeed() . ' km/h' . '<br>';
echo $car->brake();



/* début quete 2 */

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
$car->setEnergyLevel(80);
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$firstTruck = new Truck('red', 3, 'gasoline', 1000);
$firstTruck->setCurrentLoading(50);
$firstTruck->getCurrentLoading();
var_dump($firstTruck);

echo $firstTruck->forward();
echo '<br> Vitesse du camion : ' . $firstTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $firstTruck->brake();
echo '<br> Vitesse du camion : ' . $firstTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $firstTruck->brake() . '<br>';
echo $firstTruck->isFull() . '<br>';

$firstTruck2 = new Truck('yellow', 4, 'gasoline', 1000);
$firstTruck2->setCurrentLoading(1000);
$firstTruck2->getCurrentLoading();                                                       
echo $firstTruck2->forward();
echo '<br> Vitesse du camion : ' . $firstTruck2->getCurrentSpeed() . ' km/h' . '<br>';
echo $firstTruck2->brake();
echo '<br> Vitesse du camion : ' . $firstTruck2->getCurrentSpeed() . ' km/h' . '<br>';
echo $firstTruck2->brake() . '<br>';
echo $firstTruck2->isFull();


