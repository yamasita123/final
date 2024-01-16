<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
    <form action="insert-output.php" method="post">
        内容：<input type="text" name="naiyou"><br>
        入力した日付：<?php echo date("Y/m/d H:i:s"); ?><br>
        <button type="submit">追加</button>
    </form>
</body>
</html>