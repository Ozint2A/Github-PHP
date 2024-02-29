<?php
    include("./includes/haut.php");
    $id = $_GET['id'];
    $cours = Cours::find($id);
?>

<h1>Modifier un cours</h1>


<form action="fonctions/fcoursmodifier.php" method="POST">

    <input type="hidden" name="id" value="<?php echo($cours->getId())?>" required />
    <div class="mb-3 row">
        <label for="nom" class="col-sm-1 col-form-label">Nom</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="nom" value="<?php echo($cours->getNom())?>" required />
        </div>
    </div>
    <div class="mb-3 row">
    <label for="description" class="col-sm-1 col-form-label">Description</label>
        <div class="col-sm-11">
            <textarea name="description" class="form-control" cols="30" rows="10"><?php echo($cours->getDescription())?></textarea>
        </div>
    </div>

    <button type="submit">OK</button>
</form>
<?php include("./includes/bas.php");?>