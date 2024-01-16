<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('delete from Todo where id=?');
if($sql->execute([$_GET['id']])){
    echo '削除しました。';
}else{
    echo '削除できませんでした。';
}
?>

<br><hr><br>
        <table>
            <tr><th>番号</th><th>内容</th><th>日付</th></tr>
            <?php
                foreach($pdo->query('select * from Todo') as $row){
                    echo '<tr>';
                    echo '<td>',$row['id'],'</td>';
                    echo '<td>',$row['naiyou'],'</td>';
                    echo '<td>',$row['date'],'</td>';
                    echo '</tr>';
                    echo "\n";
                }
            ?>
        </table>
        <form action="delete.php" method="post">
            <button type="submit">前へ戻る</button>
        </form>