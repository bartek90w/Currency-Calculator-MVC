<?php

class model
{
    private $date;
    private $rates;
    public $base;
    private $file;
    private $path = "https://api.exchangeratesapi.io/latest?base=";


    public function loadJson()
    {
        $this->file=json_decode(file_get_contents($this->path . $this->base),true);
    }
    public function loadDate()
    {
        $this->date = $this->file{'date'};
    }
    public function loadRates()
    {
        $this->rates = $this->file{'rates'};
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function changeBase($base)
    {
        $this->base = $base;
        $this->loadJson();
        $this->loadDate();
        $this->loadRates();
    }
}

