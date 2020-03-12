<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Mythic | Login</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <div class="login">
            <form class="connexion" action="./controllers/log.php" method="POST">
                <!-- <div class="login"> -->
                    <h1>Login</h1>
                    <label for="username" class="label">
                        <i class="fas fa-user"></i>
                    </label><br>
                    <input type="text" name="pseudo" placeholder="Username" id="username" required>
                    <label for="password" class="label">
                        <i class="fas fa-lock"></i>
                    </label><br>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <input type="submit" value="Login">
                    <br>
                    <br>
                    <p class="change textChange">Pas de compte? Clique ici pour t'inscrire</p>
            </form>
            <form class="inscription hide" action="./controllers/inscription.php" method="POST">
                <h1>Inscription</h1>
                <div class="inscription-form">
                    <h3 class="textChange">Nom:</h3>
                    <input class="inscription-text" name="nom" type="text" placeholder="Delahousse"><br>
                    <h3 class="textChange">Password</h3>
                    <input class="inscription-text" name="password" type="password" placeholder="Pierre"><br>
                    <h3 class="textChange">Description</h3>
                    <input class="inscription-text" name="desc" type="text" placeholder="p.delahousse">
                    <input type="submit" value="Inscription" class="login-button">
                    <br>
                    <br>
                    <p class="change2 textChange">Déjà inscrit? Clique ici pour te connecter</p>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
    <script src="js/script.js"></script>
</body>

</html>