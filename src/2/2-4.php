<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>2-4</title>
</head>
<body>
<!-- 連想配列$memberのキーと値をforeach文を使ってすべて表示してください -->
<?php
    $member = array("name" => "⚪︎田⚪︎夫",
                    "tel" => "03-0000-0000",
                    "address" => "東京都千代田区");
    foreach($member as $key => $value){
        print "キー: " . $key . ", 値: " . $value . "<br>";
    }
?>

</body>
</html>