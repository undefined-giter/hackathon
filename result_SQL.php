<?php
session_start();
require_once('./inc/db.php');

$req = $pdo->prepare('UPDATE results SET earned_SQL = :earned_SQL, max_SQL = :max_SQL WHERE nickname = :nickname');
$req->execute(['earned_SQL' => $_GET['earned_SQL'], 'max_SQL' => $_GET['max_SQL'], ':nickname' => $_SESSION['auth']->nickname]);

header('Location: choix.php');
exit();