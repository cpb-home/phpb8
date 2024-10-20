<?php
session_start();

if ($_POST['name'] && $_POST['name'] !== '') {
    $user = trim(htmlspecialchars(($_POST['name']))); echo $user;
    $_SESSION['user'] = $user;
    header('Location: ./index.php');
    exit;
}