<?php

class CoursParcours{
    private $id;
    private $jours;
    private $cours;
    private $parcours;

    public function __construct($cours,$parcours,$jours) {
        $this->setCours($cours);
        $this->setParcours($parcours);
        $this->setJours($jours);
    }

    public function getId() {
        return $this->id;
    }

    public function getCours(){
        return $this->cours;
    }

    public function setCours($value){
        $this->cours = $value;
    }

    public function getParcours(){
        return $this->parcours;
    }

    public function setParcours($value){
        $this->parcours = $value;
    }

    public function getJours(){
        return $this->jours;
    }
    
    public function setJours($value){
        $this->jours = $value;
    }
}