<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

<?php 
echo '<table>';
echo '<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>'; 
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->query('select * from Todo');
foreach($sql as $row){
    $id=$row['id'];
    echo '<tr>';
    echo '<td>', $id, '</td>';
    echo '<td>';
    echo '<td>', $row['naiyou'], '</td>';
    echo '</td>';
    echo '<td>', $date, '</td>';
    echo '</tr>';
}
echo '</table>';
?>