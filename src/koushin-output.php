<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<link rel="stylesheet" href="./css/itiran.css">
<div class=iti>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update Todo  set naiyou=? where id=?');
if($sql->execute([htmlspecialchars($_POST['naiyou']), $_POST['id']])){
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
        <form action="itiran-show.php" method="post">
            <button type="submit">一覧画面へ戻る</button>
        </form>
            </div>