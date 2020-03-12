<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/profil.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Mythic | Accueil</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <div class="profil flex">
            <div class="left"></div>
            <div class="right">
                <h1> Profil </h1>
                <br>
                <h3> @<?= $_SESSION['pseudo'] ?> </h3>
                <ul class="flex">
                    <li>
                        <h2>Match</h2><br>
                        <h2>22</h2>
                    </li>
                    <li>
                        <h2>Abonnements</h2><br>
                        <h2>22</h2>
                    </li>
                    <li>
                        <h2>Abonnés</h2><br>
                        <h2>22</h2>
                    </li>
                </ul>
                <li id="login-button" class="flex"><a href="#">Send message</a></li>
                <br>
                <form action="controllers/profilChek.php" method="POST">
            <div>
                <p>Afficher le texte : </p>
                <input type="radio" name="text" value="on" <?= ($_SESSION['preferences']['text'] == 'on') ? 'checked' : '' ?>>
                <label for="text">Oui</label><br>
                <input type="radio" name="text" value="off" <?= ($_SESSION['preferences']['text'] == 'off') ? 'checked' : '' ?>>
                <label for="text">Non</label><br>
            </div>
            <div>
                <p>Afficher l'image : </p>
                <input type="radio" name="image" value="on" <?= ($_SESSION['preferences']['image'] == 'on') ? 'checked' : '' ?>>
                <label for="image">Oui</label><br>
                <input type="radio" name="image" value="off" <?= ($_SESSION['preferences']['image'] == 'off') ? 'checked' : '' ?>>
                <label for="image">Non</label><br>
            </div>
            <input type="submit" value="Ok">
        </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>