<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p6e5</title>
</head>

<body>
    <?php
    if (isset($_POST['buttonSubmit'])) {
        echo '<h3>Résultat: </h3>';
        echo 'Votre nom est ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' et vous etes un(e) ' . $_POST['gender'];
    } else {
    ?>

        <div id="formDIv">
            <form action="index.php" method="POST" id="form">

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

                <input type="submit" value="GO" id="buttonSubmit" name="buttonSubmit" onclick="CollapseForm()">

            </form>
        </div>
    <?php
    }
    ?>

</body>

</html>