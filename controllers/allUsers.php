<?php

$host = 'localhost';
$dbname = 'Mythic';
$username = 'root';
$password = '0000';


$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
$sql = 'SELECT * FROM users';

$q = $pdo->query($sql);

$q->setFetchMode(PDO::FETCH_ASSOC); 

?>