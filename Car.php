<?php

class Car 
{
    private int $nbWheels;
    public int $currentSpeed;
    public string $color;
    private int $nbSeats;
    public string $fuel;
    private int $fuelLevel;

    public function __construct(string $color = 'Grey', int $nbSeats = 5, string $fuel = 'Hybrid')
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->fuel = $fuel;
}
 
    public function start()
{

}

    public function forward(int $currentSpeed) :string
{
    $this->currentSpeed = $currentSpeed;

    return "Go !";
}

    public function brake() :string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }        
    $sentence .= "I'm stopped !";
    return $sentence;
}

public function getNbWheels()
{

}

    public function getCurrentSpeed()
{

}

    public function getColor()
{

}

    public function getNbSeats()
{

}

    public function getFuel()
{

}

    public function getFuelLevel()
{

}
}