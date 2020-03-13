<?php

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $host = 'localhost';
    $dbname = 'Mythic';
    $username = 'root';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, '0000');
    $sql = $pdo->prepare("SELECT name,description FROM users WHERE id LIKE :id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $users=$sql->fetchall(PDO::FETCH_ASSOC);
    

    $_SESSION['idUpdate'] = $id;
}
