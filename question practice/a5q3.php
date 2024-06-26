<?php
class Line 
{
    private $length;

    public function __construct($length) 
    {
        $this->length = $length;
    }

    public function __destruct() 
    {
        echo str_repeat("-", $this->length) .PHP_EOL ."<br>";
    }
};
$line = new Line(10);
$anotherLine = new Line(5);
?>