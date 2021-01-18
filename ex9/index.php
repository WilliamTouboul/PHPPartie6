<!-- 
Exercice 9Devoir
Créer un formulaire de création de profil sur la page index.php avec :
•             Une des bouton radio pour civilité //Mr ou Mme//
•             Un champ texte pour le nom
•             Un champ texte pour le prénom
•             Un champ date pour la date de naissance
•             Un champ d'envoi de fichier pour l'image de profil.
A la soumission du formulaire, si tous les champs sont correctement renseignés, 
uploadez l'image de profil dans un dossier image que vous auriez créer en amont. 
Afficher le profil de l'utilisateur dans une page profile.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p6e9 création profil</title>
</head>

<body>
    <?php
    if (!isset($_POST['buttonSubmit'])) {
    ?>
        <div id="formDIv">
            <form action="index.php" method="POST" enctype="multipart/form-data" id="form">
                <!-- Civilité -->
                <div>
                    <div>
                        <input type="radio" id="Mr" name="gender" value="Mr" checked>
                        <label for="Mr">Mr</label>
                    </div>
                    <div>
                        <input type="radio" id="Mme" name="gender" value="Mme" checked>
                        <label for="Mme">Mme</label>
                    </div>
                </div>
                <div>
                    <label for="name">Nom : </label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>
                <div>
                    <label for="firstname">Prénom : </label>
                    <input type="text" name="firstname" id="firstname" required>
                </div>
                <div>
                    <label for=" birth">Date de naissance:</label>
                    <input type="date" id=" birth" name="birth" value="">
                </div>
                <div>
                    <label for="profilePic">Image de profil : </label>
                    <input type="file" id="profilePic" name="profilePic" accept="image/png, image/jpeg, image/gif">
                </div>

                <input type="submit" value="GO" id="buttonSubmit" name="buttonSubmit">

            </form>
        </div>
    <?php
    } else {
        $uploaddir = 'uploaded/';
        $uploadfile = $uploaddir . basename($_FILES['profilePic']['name']);
        // On verifie le type MIME du fichier poster via un tableau des types accepter.
        $mimetype = mime_content_type($_FILES['profilePic']['tmp_name']);
        if (in_array($mimetype, array('image/jpeg', 'image/gif', 'image/png'))) { // On peut ajouter autant de type souhaité
            move_uploaded_file($_FILES['profilePic']['tmp_name'], $uploaddir . $_FILES['profilePic']['name']);
            echo '<h3>Résultat: </h3>';
            echo 'Bonjour ' . $_POST['gender'] . ', Votre nom est ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' et vous etes né(e) le ' . $_POST['birth'];
            echo '<br> Vous avez posté le fichier suivant : ' . $_FILES['profilePic']['name'];
        } else {
            echo 'C\'est pas un PDF. Essaye encore';
        }

    }

    ?>

</body>

</html>