<?php
session_start();
global $pdo;

try{
    $pdo = new pdo("mysql:dbname=gameover;host=localhost", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
}