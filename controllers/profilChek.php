<?php

session_start();
$_SESSION['text'] = $_POST['text'];

header('Location: /');