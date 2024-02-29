<?php

class Vehicule{
    private $numImmat;
    protected $consommation;
    private $vitesse;
    private $vitesseMax;
    private $acceleration;
    private $deceleration;
    protected $quantiteTransportee;

    public function __construct(
        $numImmat,
        $consommation,
        $vitesseMax,
        $acceleration = 10,
        $deceleration = 10,
    ) {
        $this->numImmat = $numImmat;
        $this->consommation = $consommation;
        $this->vitesseMax = $vitesseMax;
        $this->vitesse = 0;
        $this->acceleration = $acceleration;
        $this->deceleration = $deceleration;
        $this->quantiteTransportee = 0;
    }

    public function getQuantiteTransportee(){
        return $this->quantiteTransportee;
    }

    public function getNumImmat(){
        return $this->numImmat;
    }

    public function setConsommation($valeur){
        $this->consommation = $valeur;
    }

    public function getConsommation(){
        return $this->consommation;
    }

    public function setVitesseMax($vitesseMax){
		$this->vitesseMax = $vitesseMax;
	}

	public function getAcceleration(){
		return $this->acceleration;
	}

    public function accelerer(){
        $this->changeVitesse($this->acceleration);
        if($this->vitesse > $this->vitesseMax){
            $this->vitesse = $this->vitesseMax;
        }
    }

    public function freiner(){
        $this->changeVitesse(-$this->deceleration);
        if($this->vitesse<0){
            $this->vitesse = 0;
        }
    }

    private function changeVitesse($valeur){
        $this->vitesse = $this->vitesse + $valeur;
    }

    public function getVitesse(){
        return $this->vitesse;
    }
} 