<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p6e5</title>
</head>

<body>
    <?php
    if (!isset($_POST['buttonSubmit'])) {
    ?>
        <div id="formDIv">
            <form action="index.php" method="POST" enctype="multipart/form-data" id="form">

                <div>
                    <label for="name">Nom : </label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>

                <div>
                    <label for="firstname">Prénom : </label>
                    <input type="text" name="firstname" id="firstname" required>
                </div>

                <div>
                    <select name="gender" id="gender-select">
                        <option value="placeholder">-- Veuillez choisir une option --</option>
                        <option value="Homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>
                <div>
                    <label for="pic">Fichier a poster : </label>
                    <input type="file" id="pic" name="pic" accept="image/png, image/jpeg">
                </div>

                <input type="submit" value="GO" id="buttonSubmit" name="buttonSubmit">

            </form>
        </div>
    <?php
    } else {
        echo '<h3>Résultat: </h3>';
        echo 'Votre nom est ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' et vous etes un(e) ' . $_POST['gender'];
        echo '<br> Vous avez posté le fichier suivant : ' . $_FILES['pic']['name'];
    }
    ?>

</body>

</html>