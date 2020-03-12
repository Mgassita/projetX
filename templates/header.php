<?php session_start(); ?>
<header>
    <nav>
        <ul class="flex">
            <li><a href="/">Accueil</a></li>
            <li><a href="meet.php">Rencontre</a></li>
            <li><a href="users.php">Utilisateurs</a></li>
            <?php if (isset($_SESSION['pseudo'])) :   ?>
                <li><a href="./controllers/logout.php">Deconexion</a></li>
                <li id="profil"><a href="profil.php"> <?= $_SESSION['pseudo'] ?> </a></li>
            <?php else : ?>
                <li><a href="./login.php">Se connecter</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>