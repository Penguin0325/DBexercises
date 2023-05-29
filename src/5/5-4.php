<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>5-4</title>
</head>
    <!-- 掲示板でユーザがどのような操作をするか想像して必要なメソッドをNewBoardに追加してください。 -->
    <!-- アクセス制限はpublicにして、メソッドの内容は必要ないです。 -->
    <body>
    <form method="post" action="5-4.php">
        <label for="text">主題:</label>
        <input type="text" name="text" id="subject">
        <label for="text">名前:</label>
        <input type="text" name="text" id="name">
        <label for="text">内容:</label>
        <input type="text" name="text" id="contents">
    <input type="submit" value="送信">

    <?php
    $servername = "localhost";
    $username = "test";
    $password = "test";
    $dbname = "myDB";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
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
        public function submitArticle($setsubject,$setname, $setcontents){}
        public function editArticle($setcontents){}
        public function deleteArticle(){}
    };

    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $contents = $_POST["contents"];

    if($subject){
        print $subject;
    }
    

    $board = new Board();
    $newboard = new NewBoard();

    if ($name){
        $board -> setArtcile($subject, $name, $contents);
        $board -> dispArtcile();
    }

    $newboard -> setArtcile('subject', 'name', 'contents');
    // $newboard -> dispArtcile();

?>

</body>
</html>

<?php
    session_destroy();
?>