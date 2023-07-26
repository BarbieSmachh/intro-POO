<?php 
class Formule1
{
    private int $speed = 0;

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
   public function drive() :string
   {
    return "Vroom vroom à " . $this->getSpeed() . "km/h";
    }
    public function shiftGear()
    {
        $this->setSpeed($this->getSpeed()+50);
    }
}

?>