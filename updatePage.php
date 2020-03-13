<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/update.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/login.css">
        <title>Update</title>
    </head>
    
    <body>
        <?php include_once 'templates/header.php' ?>
        <?php include_once './controllers/takeInfo.php' ?>
    <main>
        <div class="login">
            <form class="inscription" action="./controllers/update.php" method="POST">
                <h1>Modification de votre profil</h1>
                <div class="inscription-form">
                    <h3 class="textChange">Nom:</h3>
                    <input class="inscription-text" name="nom" type="text" value="<?= $users[0]['name'] ?>"><br>
                    <h3 class="textChange">Description</h3>
                    <textarea name="desc" id="" cols="30" rows="10"><?= $users[0]['description'] ?></textarea>
                    <!-- <?php var_dump($users); ?> -->
                    <input type="submit" value="Modifier" class="login-button">
                </div>
            </form>
        </div>
    </main>
</body>

</html>