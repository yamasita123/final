<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>

<div class="th0">内容</div>
<?php $pdo=new PDO($connect, USER, PASS);

foreach($pdo->query('select * from Todo') as $row){
    echo '<form action="koushin-output.php" method="post">';
    echo $row['id'];
    echo '<div class="td0">';
	echo '<input type="text" name="naiyou" value="', $row['naiyou'],'">';
	echo '</div> ';
    echo '<div class="td2"><input type="submit" value="更新"></div>';
    echo '</form>';
    echo "\n";
}
?>
</body>
</html>