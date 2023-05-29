<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>2-5</title>
</head>
<body>
    <!-- ユーザー定義関数「test」を作成してください。引数$nameに名前を指定すると、「⚪︎⚪︎さん、こんにちは！」と文字列を返す機能を持たせてください。 -->
    <form method="post" action="2-5.php">
        <label for="name">名前:</label>
        <input type="text" name="name" id="name">
    <input type="submit" value="送信">
</form>
<?php
    $name = $_POST["name"];
    echo "\n";
    
    function printname($user){
        $result = $user . "さん、こんにちは!";
        return $result;
    };

    if ($name) {
        $test = printname($name);
        print $test;
    }
?>

</body>
</html>