<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
$id =  $_POST['id'];
$sql = $pdo->prepare('DELETE FROM Todo WHERE `Todo`.`id` = $id');
$sql->bindParam(':id', $id, PDO::PARAM_INT);
$res = $sql->execute();
require 'itiran1.php';
?>