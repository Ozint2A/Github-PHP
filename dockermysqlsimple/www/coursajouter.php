<?php
    include("./includes/haut.php");
?>
<h2>Ajouter un cours</h2>

<form action="fonctions/fcoursajouter.php" method="post">
    <input type="text" name="nom" required>
    <textarea name="description"cols="30" rows="10"></textarea>
    <button type="submit">OK</button>
</form>

<?php
    include("./includes/bas.php");
?>