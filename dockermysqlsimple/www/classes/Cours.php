<?php

class Cours{
    private $id;
    private $nom;
    private $description;

    public function __construct($nom, $description = null) {
        $this->setNom($nom);
        $this->setDescription($description);
    }

    public static function findAll() {
        $stmt = DB::getConnection()->query("SELECT * FROM cours");
        $lesCours = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cours = new Cours($row['nom'], $row['description']);
            $cours->id = $row['id'];
            $lesCours[] = $cours;
        }
        return $lesCours;
    }

    public static function find($id){
        $stmt = DB::getConnection()->prepare("SELECT * FROM cours WHERE id=:id");
        $stmt->execute([
            ':id'=> $id
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $cours = new Cours($row['nom'], $row['description']);
        $cours->id = $row['id'];

        return $cours;
    }

/*
    insert into matable (c1,c2,c3) values(val1, va2,va3);
    insert into cours(nom, description) values ("SQL","le SQL c'est super");
    update from cours set nom = valeur1, description=valeur2 where id=lidQuiVaBien
*/
    public function save(){
        if(is_null($this->id)){
            $stmt = DB::getConnection()->prepare(
                "INSERT INTO cours(nom,description)
                values(:nom, :description)");
            $stmt->execute([
                ':nom'=> $this->getNom(),
                ':description'=> $this->getDescription(),
            ]);
            $this->id = DB::getConnection()->lastInsertId();
        }else{
            $stmt = DB::getConnection()->prepare(
                "UPDATE cours set nom=:nom, description=:description
                WHERE id=:id");
            $stmt->execute([
                ':nom'=> $this->getNom(),
                ':description'=> $this->getDescription(),
                ':id'=> $this->getId()
            ]);
        }
    }

    /*
        delete from cours where id=2
    */
    public function delete(){
        $stmt = DB::getConnection()->prepare(
            "DELETE FROM cours where id= :id");
        $stmt->execute([
            ':id'=> $this->getId()
        ]);
    }

    public function getId(){
        return $this->id;
    }

    public function setNom($value){
        $this->nom = $value;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setDescription($value){
        $this->description = $value;
    }

    public function getDescription(){
        return $this->description;
    }
}


