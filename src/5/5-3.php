<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>5-3</title>
</head>
    <!-- 問題5-2で作成した、Boardクラスを継承してNewBoardクラスを継承してNewBoardクラスを作成して実行してください。下記変数のみ変更します。 -->
    <!-- public $subject = "新しい掲示板です" -->
<body>
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

    class NewBoard extends Board {
        public function setArtcile($setsubject,$setname, $setcontents){
            $this->subject = "新しい掲示板です";
            $this->name = $setname;
            $this->contents = $setcontents;
        }
    };

    $board = new Board();
    $newboard = new NewBoard();
    $board -> setArtcile('subject', 'name', 'contents');
    $board -> dispArtcile();
    echo "\n";
    $newboard -> setArtcile('subject', 'name', 'contents');
    $newboard -> dispArtcile();

?>

</body>
</html>