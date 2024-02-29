<?php

class Wapiti extends Animal{
    public function __construct($nom) {
        parent::__construct($nom);
        $this->vitesseMax = 3;
        }
        public function lanceSort($participants){
            if(Animal::chance(4)==true){
               $this->avancer();
            }
        }
}