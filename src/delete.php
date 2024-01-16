<?php
if (!empty($_SESSION['Todo'])) {
    echo '<table>';
    echo '<tr><th>番号</th><th>内容</th><th>日付</th></tr>';
    foreach ($_SESSION['Todo'] as $id=>$Todo){
        echo '<tr>';
        echo '<td>', $id, '</td>';
        echo '<td>', $Todo['naiyou'];
        echo '<td>', $Todo['date'], '</td>';
        echo '<td><a href="delete2.php?id=', $id, '">削除</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>