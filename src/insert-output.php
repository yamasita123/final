<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<?php 
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Todo values(null,?,sysdate');
    $sql->execute([
        $_POST['naiyou']
    ]);
    echo '登録しました。';
?>