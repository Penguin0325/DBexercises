<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>8-2</title>
</head>
<body>
<?php
    // try{
        $dsn = 'mysql:host=localhost;dbname=mydb;charset=utf8';
        $pdo = new PDO($dsn,'user','f3u6mi');

        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print "接続しました";
    // } catch(PDOException $Exception){
    //     die('接続エラー:'.$Exception->getMessge())
    // }
    
    // $pdo = null;
?>

</body>
</html>