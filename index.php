<?php

require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';

$truck = new Truck('green', 4, 'electric', 1000);
echo '<br>' . $truck->stokage() .  '<br>';
echo $truck->forward();
echo $truck->brake();