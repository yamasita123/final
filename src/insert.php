<?php session_start(); ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<?php 
    echo '<form action="insert-output.php" method="post">';
        echo '<table>';
        echo '<tr><td>内容　：</td><td>';
        echo '<input type="text" name="naiyou">';
        echo '</td></tr>';
        echo '</table>';
        echo '<input type="submit" value="確定">';
        echo '</from>';
?>
