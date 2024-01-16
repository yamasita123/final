<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<?php 
    $pdo=new PDO($connect, USER, PASS);
    $date = date("Y/m/d H:i:s");
    $sql=$pdo->prepare('insert into Todo(naiyou,date) values(?, ?) ');
    if($sql->execute([$_POST['naiyou'],$date])){
        echo '<font color="red" >追加されました。</font>';
    }else{
        echo '追加できませんでした。';
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
        <form action="insert.php" method="post">
            <button type="submit">追加画面へ戻る</button>
        </form>