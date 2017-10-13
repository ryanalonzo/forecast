<?php

interface WeatherProviderInterface
{
    /**
     * Main function for getting the current weather.
     * @param  string $city
     */
    function getForecast($city);
}