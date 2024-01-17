<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<link rel="stylesheet" href="./css/koushin.css">
<div class="koushin">

<?php $pdo=new PDO($connect, USER, PASS);

foreach($pdo->query('select * from Todo') as $row){
    echo '<form action="koushin-output.php" method="post">';
    echo '<input type="hidden" name="id" value="', $row['id'], '">';
    echo '<div class="td0">', $row['id'], '</div>';
    echo '<div class="td1">';
	echo '<input type="text" name="naiyou" value="', $row['naiyou'],'">';
	echo '</div> ';
    echo '<div class="td2"><input type="submit" value="更新"></div>';
    echo '</form>';
    echo "\n";
}
?>
</div>
</body>
</html>