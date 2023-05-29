<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>動作確認</title>
</head>
<body>
    <!-- POSTメソッドで送信した以下のタグのデータを$_POSTを使って表示するコードを記述してください。 -->
    <form method="post" action="4-1.php">
        <input type='text' name="address" >
    <input type="submit" value="送信">
<?php
    $data = $_POST['address'];
    print $data;
?>

</body>
</html>