<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>動作確認</title>
</head>
<body>
    <!-- このHTMLタグで送信したファイルの名前を表示してください。 -->
    <form name="form1" method="post" action="4-3.php" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        画像：
        <input type="file" name="upfile">
        <br>
        <input type="submit" value="ファイルアップロード">
    </form>
<?php
    if (isset($_FILES['upfile'])) {
        $filename = $_FILES['upfile']['name'];
        $tmpname = $_FILES['upfile']['tmp_name'];
        $filesize = $_FILES['upfilee']['size'];
        $filetype = $_FILES['upfile']['type'];
        $fileerror = $_FILES['upfile']['error'];
    };
    print $filename;
?>

</body>
</html>