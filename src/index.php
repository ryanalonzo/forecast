<?php

require_once('../vendor/autoload.php');

$forecaster = new Forecaster(new OpenWeatherApi("e92f4600539cc5b14e803e768ed0c507"));
$forecast = $forecaster->getForecast('Marilao');

echo "The temperature today in {$forecast['city']} is {$forecast['temp_c']}";