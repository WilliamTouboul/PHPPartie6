<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page profil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="bodyProfile">

    <?php
    $uploaddir = 'uploaded/';
    $uploadfile = $uploaddir . basename($_FILES['profilePic']['name']);
    // On verifie le type MIME du fichier poster via un tableau des types accepter.
    $mimetype = mime_content_type($_FILES['profilePic']['tmp_name']);
    if (in_array($mimetype, array('image/jpeg', 'image/gif', 'image/png'))) { // On peut ajouter autant de type souhaité
        move_uploaded_file($_FILES['profilePic']['tmp_name'], $uploaddir . $_FILES['profilePic']['name']);
    ?>

        <h1>Page de profil</h1>
        <img>
        <p>
            Photo de profil : <img height="32" width="32" src=<?php echo 'uploaded/' . $_FILES['profilePic']['name'] ?>> <br>
            Nom : <?php echo $_POST['lastname'] ?> <br>
            Prénom : <?php echo $_POST['firstname'] ?> <br>
            Date de naissance : <?php echo $_POST['birth'] ?><br>
        </p>

    <?php
    } else {
        echo 'C\'est pas un PDF. Essaye encore';
    }

    ?>



</body>

</html>