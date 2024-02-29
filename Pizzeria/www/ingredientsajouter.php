<?php include("./includes/haut.php");?>

<h1>Ajouter un ingrédients</h1>

<form action="fonctions/fingredientsajouter.php" method="POST">

    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Nom</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="nom" required />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Prix</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="prix" required />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Calories au gramme</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="calorie" required />
        </div>
    </div>
    <button type="submit">OK</button>
</form>
<?php include("./includes/bas.php");?>