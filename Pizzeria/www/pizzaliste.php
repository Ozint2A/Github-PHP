<?php include("./includes/haut.php");?>

<h1>Liste des pizza</h1>
<h3>Les pizza</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="table-dark">
                <td scope="col">#</td>
                <td scope="col">Nom</td>
                <td scope="col">Prix</td>

                <td scope="col">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $lesPizza = Pizza::findAll();
                foreach ($lesPizza as $pizza) {
                ?>
                <tr>
                    <th scope="row"><?php echo($pizza->getId()) ?></th>
                    <td scope="row"><?php echo($pizza->getNom()) ?></td>
                    <td scope="row"><?php echo($pizza->getPrix()) ?></td>
                    <td scope="row">
                        <a href="pizzamodifier.php?id=<?php echo($pizza->getId())?>">Modifier</a>
                        <a href="fonctions/fpizzasupprimer.php?id=<?php echo($pizza->getId())?>">Supprimer</a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>

<?php include("./includes/bas.php");?>
