<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>動作確認</title>
</head>
<body>
    <!-- time関数とdata関数を使って、現時点から２４時間後の年月日時分秒を表示してください。 -->
<?php
    $now_time = time();
    print $time;
    $cal_time = $now_time + (24 * 60 * 60);
    $time = date('Y-m-d H:i:s', $cal_time);
    print $time;
?>

</body>
</html>