<?php
var_dump($_POST);
session_start();
$id= $_SESSION['idUpdate'];
$newName = $_POST['nom'];
$newDesc = $_POST['desc'];


$host = 'localhost';
$dbname = 'Mythic';
$username = 'root';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, '0000');
$sql = $pdo->prepare("UPDATE users SET name = :name, description = :desc WHERE id like :id");
$sql->bindParam(':id', $id);
$sql->bindParam(':name', $newName);
$sql->bindParam(':desc', $newDesc);
$sql->execute();
header('Location: ../users.php');