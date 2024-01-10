<?php if(!empty($_SESSION['final'])){
    echo '<table>';
    echo '<tr><th>番号</th><th>内容</th><th>日付</th></total>';
    foreach($_SESSION['Todo'] as $id=>$Todo){
        echo '<tr>';
        echo '<td>', $Todo['id'], '</td>';
        echo '<td>',$Todo['naiyou'], '</td>';
        echo '<td>',$Todo['date'], '</td>';
        echo '</tr>';
    }
}else{
    echo 'ありません。';
}
?>