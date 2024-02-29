<?php

class Ingredients{
    private $id;
    private $nom;
    private $prix;
    private $calorie;

    public function __construct($nom, $prix, $calorie) {
        $this->setNom($nom);
        $this->setPrix($prix);
        $this->setCalorie($calorie);
    }


    public static function findAll() {
        $stmt = DB::getConnection()->query("SELECT * FROM ingredient");
        $lesIngredients = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $ingredients = new Ingredients($row['nom'], $row['prix'], $row['calorie']);
            $ingredients->id = $row['id'];
            $lesIngredients[] = $ingredients;
        }
        return $lesIngredients;
    }

    public static function find($id){
        $stmt = DB::getConnection()->prepare("SELECT * FROM ingredient WHERE id=:id");
        $stmt->execute([
            ':id'=> $id
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $ingredients = new Ingredients($row['nom'], $row['prix'], $row['calorie']);
        $ingredients->id = $row['id'];

        return $ingredients;
    }

    public function save(){
        if(is_null($this->id)){
            $stmt = DB::getConnection()->prepare(
                "INSERT INTO ingredient(nom, prix, calorie)
                values(:nom, :prix, :calorie)");
            $stmt->execute([
                ':nom'=> $this->getNom(),
                ':prix'=> $this->getPrix(),
                'calorie'=> $this->getCalorie(),
            ]);
            $this->id = DB::getConnection()->lastInsertId();
        }else{
            $stmt = DB::getConnection()->prepare(
                "UPDATE ingredient set nom=:nom, prix=:prix, calorie=:calorie
                WHERE id=:id");
            $stmt->execute([
                ':nom'=> $this->getNom(),
                ':prix'=> $this->getPrix(),
                'calorie'=> $this->getCalorie(),
                ':id'=> $this->getId()
            ]);
        }
    }

    public function delete(){
        $stmt = DB::getConnection()->prepare(
            "DELETE FROM ingredient where id= :id");
        $stmt->execute([
            ':id'=> $this->getId()
        ]);
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }

    public function getCalorie(){
        return $this->calorie;
    }

    public function setCalorie($calorie){
        $this->calorie = $calorie;
    }
}