<?php

class Animal{

    protected $id;
    protected $nom;
    protected $vitesseMax;
    protected $apparence;
    protected $position;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->position = 1;
        $this->id = uniqid();
        $this->vitesseMax = 1;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getVitesseMax(){
        return $this->vitesseMax;
    }

    public function getApparence(){
        return $this->apparence;
    }

    public function setApparence($valeur){
        $this->apparence = $valeur;
    }

    public function getPosition(){
        return $this->position;
    }

    public function setPosition($position){
        $this->position = $position;
        if($this->position<1){
            $this->position = 1;
        }
    }

    public function avancer(){
        $deplacement  = rand(1, $this->vitesseMax);
        $this->position += $deplacement;
//        $this->position += rand(1, $this->vitesseMax);
    }

    public function getGraphPosition(){
        return str_repeat('-', $this->getPosition()) . $this->getNom() . "\n";
    }

    public function lanceSort($participants){
        return null;
    }

    public static function chance($surCombien)
    {
        $chance = rand(1, $surCombien);
        if($chance==1){
            return true;
        }
        return false;
    }
}