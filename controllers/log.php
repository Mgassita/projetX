<?php 
$name = strtolower($_POST['pseudo']);
$password =md5($_POST['password']);
// $description = $_POST['desc'];

$host = 'localhost';
$dbname = 'Mythic';
$username = 'root';


$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, '0000');
$sql = $pdo->prepare("SELECT * FROM users");
$sql->bindParam(':name', $name);
$sql->bindParam(':password', $password);
$sql->bindParam(':description', $description);

$sql->execute();
$users=$sql->fetchall(PDO::FETCH_ASSOC);

foreach ($users as $user) {

    if ($name == $user['name'] && $user['password'] == $password){
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = ucfirst($user['name']);
        $_SESSION['descCheck'] = $user['description'];
        // $_SESSION['imgCheck'] = $user['indexImg'];
        header('Location: /'); die;
    }
}

// header('Location: /login.php');