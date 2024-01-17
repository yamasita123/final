<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<link rel="stylesheet" href="./css/itiran.css">
<div class=iti>
<body>
    <table>
    <tr><th>番号</th><th>内容</th><th>日付</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from Todo') as $row){
        echo '<tr>';
        echo '<td>',$row['id'], '</td>';
        echo '<td>',$row['naiyou'], '</td>';
        echo '<td>',$row['date'], '</td>';
        echo '<td>';
        echo '<a href="delete2.php?id=', $row['id'], '">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }

?>
    </table>
    </body>
    </div>