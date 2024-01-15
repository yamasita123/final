<?php require 'header.php'; ?>
<?php 
echo '<table>';
echo '<tr><th>番号</th><th>内容</th><th>日付</th></tr>'; 
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->query('select * from Todo');
foreach($sql as $row){
    $id=$row['id'];
    echo '<tr>';
    echo '<td>', $id, '</td>';
    echo '<td>', $row['naiyou'],'</td>';
    echo '<td>', $row['date'], '</td>';
    echo '</tr>';
}
echo '</table>';
?>