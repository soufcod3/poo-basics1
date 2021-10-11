<?php

class Bicycle
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 3;
    private int $nbWheels;

    public function forward(int $currentSpeed): string
{
    $this->currentSpeed = $currentSpeed;

    return "Go !";
}

    public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}
}
