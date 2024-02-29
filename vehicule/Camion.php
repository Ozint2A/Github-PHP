<?php
require_once("Vehicule.php");

class Camion extends Vehicule{
    private $capaciteRemorque;
    private $consommationDorigine;
    // private $quantiteRemplissage;
    
    

    public function setCapaciteRemorque($value){
        $this->capaciteRemorque = $value;
    }

    public function getCapaciteRemorque(){
        return $this->capaciteRemorque;
    }

    // public function setQuantiteRemplissage($value){
    //     $this->quantiteRemplissage = $value;
    // }

    // public function getQuantiteRemplissage(){
    //     return $this->quantiteRemplissage;
    // }

    public function remplirRemorque($value){
        $this->quantiteTransportee += $value;
        if($this->quantiteTransportee > $this->capaciteRemorque){
            $this->quantiteTransportee = $this->capaciteRemorque;
        }}

    public function viderTotalRemorque(){
      $poids = $this->quantiteTransportee;
      $this->quantiteTransportee = 0;
      $this->changeConsommation();
      return $poids;
    }

    private function changeConsommation(){
        if($this->quantiteTransportee==0){
            $this->consommation = $this->consommationDorigine;
        }
    }
}
