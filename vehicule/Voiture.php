<?php 
require_once("Vehicule.php");
class Voiture extends Vehicule{
    private $nbPlaces;
    private $capaciteCoffre;
    // private $quantiteCoffre;

    public function getNbPlaces(){
        return $this->nbPlaces;
    }

    public function setNbPlaces($value){
        $this->nbPlaces = $value;
    }

    public function getCapaciteCoffre(){
        return $this->capaciteCoffre;
    }

    public function setCapaciteCoffre($value){
        $this->capaciteCoffre = $value;
    }

    // public function setQuantiteCoffre($value){
    //     $this->quantiteCoffre = $value;
    // }

    // public function getQuantiteCoffre(){
    //     return $this->quantiteCoffre;
    // }


    public function remplirCoffre($value){
        $this->quantiteTransportee += $value;
        if($this->quantiteTransportee > $this->capaciteCoffre){
            $this->quantiteTransportee = $this->capaciteCoffre;
        }
    }

    public function viderCoffre($value){
        $poids = $this->quantiteTransportee;
        $this->quantiteTransportee -= $value;
        if($this->quantiteTransportee<0){
            $this->quantiteTransportee = 0;
        }
        return $poids;
    }
}