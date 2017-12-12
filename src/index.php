<?php

require_once('../vendor/autoload.php');

$forecaster = new Forecaster(new ApixuApi("c58d4914f6e643c3ba481924170408"));
$forecast = $forecaster->getForecast('Quezon City');

echo "The temperature today in {$forecast['city']} is {$forecast['temp_c']} HAHAHAA";
