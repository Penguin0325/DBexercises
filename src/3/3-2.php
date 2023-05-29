<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>動作確認</title>
</head>
<body>
    <!-- array_pop関数を使って配列$dataの末尾に格納されたデータを変数$lastに格納してください。 -->
<?php
    $data = array('月', '火', '水', '木', '金', '土', '日');
    $last = array_pop($data);
    print $last;
?>

</body>
</html>