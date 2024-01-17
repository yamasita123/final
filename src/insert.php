<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<link rel="stylesheet" href="./css/insert.css">
<div class="insert">
    <form action="insert-output.php" method="post">
        内容：<input type="text" name="naiyou"><br>
        入力した日付：<?php echo date("Y/m/d H:i:s"); ?><br>
        <button type="submit">追加</button>
    </form>
    </div>
</body>
</html>