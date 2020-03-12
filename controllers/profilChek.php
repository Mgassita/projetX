<?php 

session_start();

$_SESSION['preferences']['image'] = $_POST['image'];
$_SESSION['preferences']['text'] = $_POST['text'];

header('Location: /');