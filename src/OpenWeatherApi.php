<?php

class OpenWeatherApi implements WeatherProviderInterface
{
    protected $key;
    protected $api = "http://api.openweathermap.org/data/2.5/weather?units=metric";
    /**
     * Must have a key to instantiate this class
     * @param string $key
     */
    public function __construct($key)
    {
       $this->key = $key;
    }
    /**
     * Current weather forecast by city
     * @param  string $city
     * @return array
     */
    public function getForecast($city) {

        $url = sprintf("%s&q=%s&appid=%s", $this->api, $city, $this->key);
        $results = json_decode(file_get_contents($url));

        return [
            'city' => $results->name,
            'temp_c' => $results->main->temp,
            'pressure' => $results->main->pressure,
            'visibility' => $results->visibility,
            'humidity' => $results->main->humidity
        ];
    }
}