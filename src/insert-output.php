<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<?php 
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->pripare('insert into Todo values(null,?,?)');
    $sql->execute([$_POST['naiyou'], NOW()]);
    echo '登録しました。';
?>

