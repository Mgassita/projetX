<?php 

session_start();
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['preferences']['image'] = 'on';
$_SESSION['preferences']['text'] = 'on';

header('Location: /');