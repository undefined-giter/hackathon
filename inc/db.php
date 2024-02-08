<?php
try{
    self::$pdo = new PDO("mysql:host=leorcoyshared.mysql.db;dbname=leorcoyshared;charset=utf8mb4","leorcoyshared", "theAnswerIs42");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch(PDOException $e){
    echo $e->getMessage();
}