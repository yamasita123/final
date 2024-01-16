<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>

<?php
$pdo=new PDO($connect, USER, PASS);
$date = date("Y/m/d H:i:s");
$sql=$pdo->prepare('update Todo  set naiyou=?, date=$date where id=?');
if($sql->execute([htmlspecialchars($_POST['naiyou']),$date])){
    echo '更新しました。';
}else{
    echo '更新できませんでした。';
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
        <form action="koushin.php" method="post">
            <button type="submit">前へ戻る</button>
        </form>