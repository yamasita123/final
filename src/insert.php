<?php session_start(); ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<?php if(iseet($_SESSION['final'])){
    $naiyou=$_SESSION['final']['naiyou']
}
echo '<form action="insert-output.php" method="post">';
        echo '<table>';
        echo '<tr><td>内容</td><td>';
        echo '<input type="text" name="naiyou" value="', $naiyou, '">';
        echo '</td></tr>';
        echo '<tr><td>日付</td><td>';
        echo '$date = new DateTime('now');'
        echo '$date->format('Y年m月d日 H時i分s秒')';
        echo '</td></tr>';
        echo '</table>';
        echo '<input type="submit" value="確定">';
        echo '</from>';
        ?>
