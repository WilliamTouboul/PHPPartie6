<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p6e9 création profil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="formDIv">
        <form action="profile.php" method="POST" enctype="multipart/form-data" id="form">
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



</body>

</html>