<?php
session_start();
require_once('./inc/db.php');

$req = $pdo->prepare('UPDATE results SET earned_algo = :earned_algo, max_algo = :max_algo WHERE nickname = :nickname');
$req->execute(['earned_algo' => $_GET['earned_algo'], 'max_algo' => $_GET['max_algo'], ':nickname' => $_SESSION['auth']->nickname]);

header('Location: choix.php');
exit();