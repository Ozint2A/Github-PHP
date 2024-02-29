<?php 

class IngredientsPizza{
    private $id;
    private $ingredients;
    private $pizza;
    private $quantite;
    
    public function __construct($ingredients, $pizza, $quantite) {
        $this->setIngredients($ingredients);
        $this->setPizza($pizza);
        $this->setQuantite($quantite);
    }
    
    public static function find($id) {
        $stmt = DB::getConnection()->prepare("SELECT * FROM ingredientPizza WHERE id=:id");
        $stmt->execute([':id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $ingredient = Ingredients::find($row['id_ingredient']);
        $pizza = Pizza::find($row['id_pizza']);
        $objet = new IngredientsPizza($ingredient, $pizza, $row['quantite']);
        $objet->id = $row['id'];
        return $objet;
    }

    public static function findByPizza($pizza){
        $stmt = DB::getConnection()->prepare("SELECT * FROM ingredientPizza WHERE id_pizza=:id");
        $stmt->execute([':id' => $pizza->getId()]);
        $tab = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab[]=IngredientsPizza::find($row['id']);
        }
        return $tab;
    }
    

    public static function findByIngredientPizza($pizza, $ingredients){
        $stmt = DB::getConnection()->prepare("SELECT * FROM ingredientPizza WHERE id_pizza=:id_pizza and id_ingredient=:id_ingredient");
        $stmt->execute([
            ':id_pizza' => $pizza->getId(),
            ':id_ingredient' => $ingredients->getId()
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row==false){
            return null;
        }
        $cp=IngredientsPizza::find($row['id']);
        return $cp;
    }

    public function save(){
        if(is_null($this->id)){
            $stmt = DB::getConnection()->prepare(
                "INSERT INTO ingredientPizza(id_ingredient,id_pizza, quantite)
                values(:ingredients, :pizza, :quantite)");
            $stmt->execute([
                ':ingredients'=> $this->getIngredients()->getId(),
                ':pizza'=> $this->getPizza()->getId(),
                ':quantite'=> $this->getQuantite()
            ]);
            $this->id = DB::getConnection()->lastInsertId();
        }else{
            $stmt = DB::getConnection()->prepare(
                "UPDATE ingredientPizza set id_ingredient=:ingredients, id_pizza=:pizza, quantite=:quantite
                WHERE id=:id");
            $stmt->execute([
                ':ingredients'=> $this->getIngredients()->getId(),
                ':pizza'=> $this->getPizza()->getId(),
                ':quantite'=> $this->getQuantite(),
                ':id'=> $this->getId()
            ]);
        }
    }

    public function delete(){
        $stmt = DB::getConnection()->prepare("DELETE FROM ingredientPizza WHERE id=:id");
        $stmt->execute([
            'id' => $this->id
        ]);
    }

    public function getId(){
        return $this->id;
    }

    public function getQuantite(){
        return $this->quantite;
    }

    public function setQuantite($quantite){
        $this->quantite = $quantite;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }

    public function getPizza(){
        return $this->pizza;
    }

    public function setPizza($pizza){
        $this->pizza = $pizza;
    }


}