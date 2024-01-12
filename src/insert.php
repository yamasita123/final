<?php session_start(); ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<?php
if(isset($_SESSION['Todo'])){
    $naiyou=$_SESSION['Todo']['naiyou'];
}
echo '<form action="insert-output.php" method="post">';
echo '<table>';
echo '<tr><td>内容：</td><td>';
echo '<input type="text" name="naiyou" value="">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="登録">';
echo '</from>';
?>
