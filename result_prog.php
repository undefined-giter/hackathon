<?php
session_start();
require_once('./inc/db.php');

$req = $pdo->prepare('UPDATE results SET earned_prog = :earned_prog, max_prog = :max_prog WHERE nickname = :nickname');
$req->execute(['earned_prog' => $_GET['earned_prog'], 'max_prog' => $_GET['max_prog'], ':nickname' => $_SESSION['auth']->nickname]);

header('Location: choix.php');
exit();