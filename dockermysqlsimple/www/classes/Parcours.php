<?php

class Parcours{
    private $id;
    private $nom;
    private $description;

    public function __construct($nom,$description = null) {
        $this->setNom($nom);
        $this->setDescription($description);
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($value){
        $this->nom = $value;
    }

    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($value){
        return $this->description = $value;
    }
}