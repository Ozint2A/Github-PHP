<?php
    include("./includes/haut.php");
    $id = $_GET['id'];
    $pizza = Pizza::find($id);
?>

<h1>Modifier une Pizza</h1>


<form action="fonctions/fpizzamodifier.php" method="POST">

    <input type="hidden" name="id" value="<?php echo($pizza->getId())?>" required />
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Nom</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="nom" value="<?php echo($pizza->getNom())?>" required />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Prix</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="prix" value="<?php echo($pizza->getPrix())?>" required />
        </div>
    </div>
    <?php $lesIngredients=Ingredients::findAll();
        foreach ($lesIngredients as $ingredients) {
            $cp=IngredientsPizza::findByIngredientPizza($ingredients, $pizza);
            $quantite=0;
            if(!is_null($cp)){
                $quantite = $cp->getQuantite();
            }
            ?>
            <div class="mb-3 row">
                <label for="cours<?php echo($ingredients->getId())?>" class="col-sm-1 col-form-label"><?php echo($ingredients->getNom())?></label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="cours<?php echo($ingredients->getId())?>" value=<?php echo($quantite);?> />
                </div>
            </div>
                <?php }?>
   

                
        <button type="submit" class="btn btn-primary">OK</button>
    
</form>
<?php include("./includes/bas.php");?>