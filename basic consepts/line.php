<?php
class line{
    public $length;
     function __construct($length) {
        $this->length = $length;
    }
    function __destruct(){
        echo str_repeat("__",$this->length)."<br>";
    }
}
$line=new line(50);
?>