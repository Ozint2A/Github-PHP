<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <link href="iziToast.css" rel="stylesheet">
    <script src="script.js"></script>
    <script src="jquery.js"></script>
    <script src="iziToast.js"></script>
</head>

<body>
    <div class="form-connect">
        <img src="img-mcdo.jpg" id="logo">
        <form action="javascript:connexion()" method="post">
            <label>Email :</label><br>
            <input type="mail" id="email" required><br>
            <label>Mot de passe:</label><br>
            <input type="password" class="pwd"><br>
            <input type="submit" class="btn-connect" value="Se connecter">
        </form>

    </div>
</body>

</html>