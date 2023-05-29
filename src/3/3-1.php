<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>3-1</title>
</head>
<body>
    <!-- substr関数を使って、「TEL:03-0000-0000（代表）」の電話番号部分だけを切り取って変数$telに格納してください。 -->
<?php
    $str = "TEL:03-0000-0000（代表）";
    print $str;
    echo "\n";

    $len = [];
    for ($i=0; $i<=strlen($str); $i++){
        print is_int($str[$i]);
        if (is_numeric($str[$i])){
            $len[] = $i;
        }
    };

    // print $len[count($len)-2];
    $tel = substr($str, $len[0], $len[count($len)-4]);
    print $tel;
?>

</body>
</html>