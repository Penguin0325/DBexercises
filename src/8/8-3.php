<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>8-3</title>
</head>
<body>
<?php
    try {
        $dsn = 'mysql:host=localhost;dbname=mydb;charset=utf8';
        $pdo = new PDO($dsn,'user','f3u6mi');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO member (first_name, last_name, age) VALUES ('中村', '六郎', 42)";
    
        // SQL文を実行
        $pdo->exec($sql);
    
        // echo "テーブルが作成されました。";
    }  catch (PDOException $e) {
        echo "エラー: " . $e->getMessage();
    }
?>

</body>
</html>