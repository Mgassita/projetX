<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/header.css">
      <title>Mythic | Accueil</title>
</head>

<body>
      <?php include_once 'templates/header.php' ?>
      <?php if (isset($_SESSION['text']) == 'checked'):   ?>      
      <main>
            <div id="txtDesc"><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione qui sed voluptates aut, quidem necessitatibus odio accusantium quibusdam! Eius fuga aperiam porro! Ad rem porro error consectetur molestiae, blanditiis ipsam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, earum reprehenderit ex, ab aut fugiat cum adipisci consequuntur repellat voluptas ipsum vero tenetur voluptatibus. Sed possimus ad nihil maiores blanditiis!</p></div>
      </main>
      <?php endif ?>
      <footer>

      </footer>
</body>

</html>