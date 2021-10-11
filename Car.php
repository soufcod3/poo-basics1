<?php

class Car 
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $fuel;
    private int $fuelLevel;

    public function __construct(string $color, int $nbSeats = 5, string $fuel)
{
    $this->color = strtolower($color);
    $this->nbSeats = $nbSeats;
    $this->fuel = $fuel;
}
 
    public function start(): string
{
    return "Le moteur vient de s'allumer. C'est une jolie voiture de couleur {$this->color}. <br>" .
    "Elle possède {$this->nbSeats} siège(s) et est de type {$this->fuel}.";

}

    public function forward(int $currentSpeed) :string
{
    $this->currentSpeed = $currentSpeed;
    return "C'est parti ! La voiture a accéléré.";
}

    public function brake() :string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "On freine !";
    }        
    $sentence .= "<br> La voiture s'est arrêté ! <br>";
    return $sentence;
}

    public function getNbWheels(): int
{
    return $this->nbWheels;
}

    public function getCurrentSpeed(): string
{
    return "Vitesse de la voiture: {$this->currentSpeed} km/h";
}

    public function getColor($color): string
{
    return $this->color;
}

    public function getNbSeats(): int
{
    return $this->nbSeats;
}

    public function getFuel(): string
{
    return $this->fuel;
}

    public function getFuelLevel(): string
{
    return "Niveau du carburant: {$this->fuelLevel} %";
}
}
