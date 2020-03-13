<?php 

session_start();
$name = strtolower($_POST['nom']);
$password =md5($_POST['password']);
$description = $_POST['desc'];

$host = 'localhost';
$dbname = 'Mythic';
$username = 'root';


$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, '0000');
$sql = $bdd->prepare("SELECT * FROM users");
$sql->bindParam(':name', $name);
$sql->bindParam(':password', $password);
$sql->bindParam(':description', $description);

$q->execute();

if (isset($_POST['id'])) {
    $name = strtolower($_POST['nom']);
    $password =md5($_POST['password']);
    $description = $_POST['desc'];
}

header('Location: /');