<?php

// if (isset($_POST['delete'])) {
//     $id = $_POST['delete'];
//     $host = 'localhost';
//     $dbname = 'Mythic';
//     $username = 'root';

//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, '0000');
//     $sql = "DELETE FROM users WHERE id = $id";

//     $q = $pdo->query($sql); 
//     header('Location: /users.php');
//     die;
// }
// header('Location: /users.php');die;


$id = $_POST['id'];

$bdd = new PDO('mysql:host=localhost;dbname=Mythic;charset=utf8', 'root', '0000');
$sth = $bdd->prepare("DELETE FROM users WHERE id=:id");
$sth->bindParam(':id', $id);
$sth->execute();

header('Location: /users.php');