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
                <form action="./controllers/profilChek.php" method="POST">
                    <p>Afficher ou masquer les informations de l'index</p>
                    <input type="checkbox" name="text" value="checked">
                    <br>
                    <input type="submit" value="valider" class="login-button">
                </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>