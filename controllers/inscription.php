<?php

session_start();
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['preferences']['image'] = 'yes';
$_SESSION['preferences']['text'] = 'yes';

$name = strtolower($_POST['nom']);
$password =md5($_POST['password']);
$description = $_POST['desc'];

$host = 'localhost';
$dbname = 'Mythic';
$username = 'root';


$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, '0000');
$sql = $bdd->prepare("INSERT INTO users (name, password, description) VALUES (:name, :password, :description)");
$sql->bindParam(':name', $name);
$sql->bindParam(':password', $password);
$sql->bindParam(':description', $description);

$q->execute();

header('Location: /')
?>
