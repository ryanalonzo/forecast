<?php

class Forecaster
{
    protected $provider;

    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function getForecast($city)
    {
        return $this->provider->getForecast($city);
    }
}