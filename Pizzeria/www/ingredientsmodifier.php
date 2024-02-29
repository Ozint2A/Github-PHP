<?php
    include("./includes/haut.php");
    $id = $_GET['id'];
    $ingredients = Ingredients::find($id);
?>

<h1>Modifier un ingrédients</h1>


<form action="fonctions/fingredientsmodifier.php" method="POST">

    <input type="hidden" name="id" value="<?php echo($ingredients->getId())?>" required />
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Nom</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="nom" value="<?php echo($ingredients->getNom())?>" required />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Prix</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="prix" value="<?php echo($ingredients->getPrix())?>" required />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Calories au gramme</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="calorie" value="<?php echo($ingredients->getCalorie())?>" required />
        </div>
    </div>

    <button type="submit">OK</button>
</form>
<?php include("./includes/bas.php");?>