<?php if(!empty($_SESSION['final'])){
    echo '<table>';
    echo '<tr><th>番号</th><th>内容</th><th>日付</th></total>';
    foreach($_SESSION['final'] as $id=>$final){
        echo '<tr>';
        echo '<td>', $final['id'], '</td>';
        echo '<td>',$final['naiyou'], '</td>';
        echo '<td>',$final['date'], '</td>';
        echo '</tr>';
    }
}else{
    echo 'ありません。';
}
?>