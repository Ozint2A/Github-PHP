<?php include("./includes/haut.php");?>

<h1>Ajouter un pizza</h1>



<form action="fonctions/fpizzaajouter.php" method="POST">

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

    <!-- <?php
        $lesIngredients = Ingredients::findAll();
        foreach($lesIngredients as $ingredients){?>
            <div class="mb-3 row">
                <label for="nom" class="col-sm-1 col-form-label"><?php echo($ingredients->getNom())?></label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="ingredients<?php echo($ingredients->getId())?>" value="0" required />
                </div>
            </div>

        <?php }?> -->


    <button type="submit">OK</button>
</form>
<?php include("./includes/bas.php");?>
