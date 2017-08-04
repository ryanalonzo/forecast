<?php

class Forecaster
{
    protected $provider;
    /**
     * Requires a parameter that is an instance of WeatherProviderInterface
     * @param WeatherProviderInterface $provider
     */
    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
    }
    /**
     * Must invoke to return the current weather by city.
     * @param  string $city
     * @return array
     */
    public function getForecast($city)
    {
        return $this->provider->getForecast($city);
    }
}