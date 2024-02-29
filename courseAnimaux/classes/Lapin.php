<?php

class Lapin extends Animal{

    private $estGele;
    private $nbTourgele;

    public function __construct($nom) {
    parent::__construct($nom);
    $this->vitesseMax = 5;
    $this->estGele = false;
    $this->nbTourgele = 0;
    }


    public function getEstGele(){
        return  $this->estGele;
    }

    public function setEstGele($value){
        $this->estGele = $value;
        $this->nbTourgele = 2;
    }

    public function avancer()
    {
        if($this->estGele == false){
            parent::avancer();
        }else{
            $this->nbTourgele -= 1;
            if($this->nbTourgele==0){
                $this->setEstGele(false);
            }
        }
    }
}