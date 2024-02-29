<?php
class CompteBancaire{
    public $nom;
    private $id;
    private $solde;
    public $negatifAutorise;

    public function __construct($leNom, $montantDepot=null){
        $this->nom = $leNom;
        $this->id = uniqid();
        $this->negatifAutorise = false;
        $this->solde = 0;
        if(!is_null($montantDepot)){ $this->depot($montantDepot);}
    }

    public function getId(){
        return $this->id;
    }

    public function getSolde(){
        return $this->solde;
    }
    
    public function depot($montant){
        $this->solde += $montant;
    }
    
    public function retrait($montant){
        if($this->negatifAutorise==true || $this->solde >= $montant){
            $this->solde -= $montant;
        }
    }
}

// <?php

// class Compte{
//     private $id;
//     public $nom;
//     private $solde;
//     public $negatifAutorise;

//     public function __construct($leNom, $montantDepot = null) {
//         $this->nom = $leNom;
//         $this->id = uniqid();
//         $this->negatifAutorise = false;
//         $this->solde = 0;
//         if(!is_null($montantDepot)){
//             $this->depot($montantDepot);
//         }
//     }

//     public function getId(){
//         return $this->id;
//     }

//     public function depot($montant){
// //        $this->solde = $this->solde + $montant;
//         $this->solde += $montant;

//     }

//     public function retrait($montant){
// /*
//         if($this->negatifAutorise==true){
//             $this->solde -= $montant;
//         }else{
//             if($this->solde>=$montant){
//                 $this->solde -= $montant;
//             }
//         }
// */
//         if($this->negatifAutorise==true || $this->solde>=$montant){
//                 $this->solde -= $montant;
//         }

//     }

//     public function getSolde(){
//         return $this->solde;
//     }

// }