<?php
require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle();

$car = new Car(rouge, 2, hybrid);

echo '<strong>Test of the car:</strong>' . '<br>';
echo $car->forward(92) . '<br>';
echo $car->getCurrentSpeed() . '<br>';
echo $car->brake();
echo $car->getCurrentSpeed() . '<br><br>';


echo "<strong>Test of the bike:</strong>" . '<br>';
echo $bike->forward(25) . '<br>';
echo $bike->brake();
echo "Vitesse du vélo: " . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>';
