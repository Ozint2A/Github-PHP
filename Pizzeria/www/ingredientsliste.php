<?php include("./includes/haut.php");?>

<h1>Liste des ingrédients </h1>
<h3>Les ingrédients</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="table-dark">
                <td scope="col">#</td>
                <td scope="col">Nom</td>
                <td scope="col">Prix</td>
                <td scope="col">Calorie au gramme</td>
                <td scope="col">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $lesIngredients = Ingredients::findAll();
                foreach ($lesIngredients as $ingredients) {
                ?>
                <tr>
                    <th scope="row"><?php echo($ingredients->getId()) ?></th>
                    <td scope="row"><?php echo($ingredients->getNom()) ?></td>
                    <td scope="row"><?php echo($ingredients->getPrix()) ?></td>
                    <td scope="row"><?php echo($ingredients->getCalorie()) ?></td>
                    <td scope="row">
                        <a href="ingredientsmodifier.php?id=<?php echo($ingredients->getId())?>">Modifier</a>
                        <a href="fonctions/fingredientssupprimer.php?id=<?php echo($ingredients->getId())?>">Supprimer</a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>

<?php include("./includes/bas.php");?>