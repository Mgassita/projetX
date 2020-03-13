<?php include_once 'controllers/allUsers.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/users.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <!-- <form action="./controllers/delete.php" method="POST"> -->
        <table class="users">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Suppr.</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($r = $q->fetch()) : ?>
                    <tr>
                        <td><?php echo ($r['id']) ?></td>
                        <td><?php echo ($r['name']) ?></td>
                        <td><?php echo ($r['description']); ?></td>
                        <!-- <td><input type="radio" name="delete" value="<?= $r['id'] ?>"></td> -->
                        <td class="action">
                            <form action="./controllers/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?= $r['id'] ?>">
                                <input type="submit" value="X">
                            </form>
                        </td>
                        <td class="action">
                            <form action="./updatePage.php" method="POST">
                                <input type="hidden" name="id" value="<?= $r['id'] ?>">
                                <input type="submit" value="U">
                            </form>
                        </td>
                        <!-- <td><input type="radio" name="update" value="<?= $r['id'] ?>"></td> -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <!-- <button type="submit">Validé</button> -->
        <!-- </form> -->
    </main>
</body>

</html>