<?php

class ApixuApi implements WeatherProviderInterface
{
    protected $key;
    protected $api = "http://api.apixu.com/v1/current.json";
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

        $url = sprintf("%s?key=%s&q=%s", $this->api, $this->key, $city);
        $results = json_decode(file_get_contents($url));

        return [
            'city' => $results->location->name,
            'temp_c' => $results->current->temp_c,
            'pressure' => $results->condition->pressure_mb,
            'humidity' => $results->condition->humidity
        ];
    }
}