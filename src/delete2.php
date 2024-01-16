<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
unset($_SESSION['Todo'][$_GET['id']]);
echo '内容を削除しました。';
echo '<hr>';
require 'delete.php';
?>