<?php

interface WeatherProviderInterface
{
    function getForecast($city);
}