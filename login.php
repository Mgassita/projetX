<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="img/game.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Mythic | Login</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <div class="login">
            <form action="./controllers/log.php" method="POST">
                <div class="login-form">
                    <h3>Username:</h3>
                    <br>
                    <input class="login-text" name="pseudo" type="text" placeholder="Username"><br>
                    <br>
                    <input type="submit" value="Login" class="login-button">
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>