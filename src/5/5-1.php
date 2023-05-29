<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>5-1</title>
</head>
<body>
    <!-- Boardという名称の掲示板クラスを作成しましょう。件名「$subject」、名前「$name」、内容「$contents」という変数をpublicで宣言して、 -->
    <!-- 適当な文字列を設定します。メソッド「dispArtcile()」をpublicで宣言してください。メソッドの内容はprint文で表示します。 -->
<?php
    
    class Board
    {
        public $subject;
        public $name;
        public $contents;

        public function setArtcile($setsubject, $setname, $setcontents){
            $this->subject = $setsubject;
            $this->name = $setname;
            $this->contents = $setcontents;
        }
        public function dispArtcile(){
            print "Subject:  ". $this->subject;
            print "Name:  ". $this->name;
            print "Contents:  ". $this->contents;
        }
    };

    $artcile = new Board();
    $artcile -> setArtcile('subject', 'name', 'contents');
    $artcile -> dispArtcile();
    
?>

</body>
</html>