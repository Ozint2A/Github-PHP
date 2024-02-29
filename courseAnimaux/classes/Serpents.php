<?php

class Serpents extends Animal{
    public function __construct($nom) {
        parent::__construct($nom);
        $this->vitesseMax = 3;
        }
    public function lanceSort($participants){
         foreach($participants as $participant){
            if($participant->getId() != $this->getId()){
                if(Animal::chance(8)==true){
                    $participant->setPosition(1);
                }
            }                
        }
    }
}