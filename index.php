<?php
require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle();
$newBike = new Bicycle();

$car = new Car();
$newCar = new Car();

echo "<strong>Test of the bike:</strong>" . '<br>';
echo $bike->forward(25) . '<br>';
echo "Vitesse du vélo: " . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo "Vitesse du vélo: " . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>';

echo "<strong>Test of the new bike:</strong>" . '<br>';
echo $newBike->forward(37.2) . '<br>';
echo "Vitesse du vélo: " . $newBike->currentSpeed . ' km/h' . '<br>';
echo $newBike->brake();
echo "Vitesse du vélo: " . $newBike->currentSpeed . ' km/h' . '<br>';
echo $newBike->brake() . '<br><br>';

echo "<strong>Test of the car:</strong>" . '<br>';
echo $car->forward(92) . '<br>';
echo "Vitesse de la voiture: " . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo "Vitesse de la voiture: " . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake() . '<br><br>';

echo "<strong>Test of the new car:</strong>" . '<br>';
echo $newCar->forward(295) . '<br>';
echo "Vitesse de la voiture: " . $newCar->currentSpeed . ' km/h' . '<br>';
echo $newCar->brake();
echo "Vitesse de la voiture: " . $newCar->currentSpeed . ' km/h' . '<br>';
echo $newCar->brake();