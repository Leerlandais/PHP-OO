<?php

class PersoWarrior extends PersoAbstract{

    protected int $strength   = 100;
    protected int $resistance = 100;

    public function __construct(string $theName, string $theEspece)
    {
        parent::__construct($theName, $theEspece);
    }
  
 
    public function getHealthPoint() : ?int
    {
        return $this->healthPoint;
    }
     
    public function getExperience()
    {
        return $this->experience;
    }

 
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;

        return $this;
    }    


    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    public function attack($enemy) 
    {
        return;
    }

    public function defence($enemy)
    {
        return;
    }

    protected function initPerso()
    {
        
    }
}