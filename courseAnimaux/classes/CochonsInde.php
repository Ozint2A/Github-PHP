<?php

class CochonsInde extends Animal{
    public function __construct($nom) {
        parent::__construct($nom);
        $this->vitesseMax = 2;
        }
    public function lanceSort($participants){
        foreach($participants as $participant){
            if(get_class($participant) == "Lapin"){
                if(Animal::chance(3)==true){
                    $participant->setEstGele(true);;
                }
            }
        }                
    }
}