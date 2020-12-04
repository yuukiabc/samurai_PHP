<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        
<?php
class Human{
    public $name;
    public $birthday;
    private $gender;
    
    public function walk() {
        echo '歩きます'.php_Eol;
    }
}

$humman=new Human();
$human->walk();
?>

</body>
</html>