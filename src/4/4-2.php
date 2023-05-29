<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>動作確認</title>
</head>
<body>
    <!-- セッションを開始して、セッション変数の中からキーが「name」のデータを表示してください -->
<?php
    $_SESSION["name"] = 'name';
    echo $_SESSION['name'];

    session_destroy();
?>

</body>
</html>