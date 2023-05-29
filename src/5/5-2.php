<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>5-2</title>
</head>
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

    $board = new Board();
    $board -> setArtcile('subject', 'name', 'contents');
    $board -> dispArtcile();
    
?>

</body>
</html>