<?php

class Tortue extends Animal{
    public function __construct($nom) {
        parent::__construct($nom);
        $this->vitesseMax = 2;
        }
        public function lanceSort($participants){
            foreach($participants as $participant){
                if(get_class($participant) != "Tortue"){
                $position = $participant->getPosition();
                $participant->setPosition($position-1);
             }
        }                
    }
}