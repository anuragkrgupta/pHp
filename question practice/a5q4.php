<?php
class BCA{
public $name,$roll_no,$age,$gender;
public function __construct($n, $r, $a, $g) {  
$this->name = $n; 
$this->roll_no=$r; 
$this->age= $a; 
$this->gender=$g;  
}  
public function stName($name)
{
    $this->name=$name;
}
public function  display()  
{
    echo "Name : ". $this->name . "<br> Roll No. :" . $this->roll_no . "<br> Age :". $this->age."<br> Gender :" . $this->gender ;  
}
}
class MCA  extends BCA
{
    private $mcaroll;
    private $mobile;
    public function __construct($name,$m,$mo)
    {
        parent::__construct($name,'',0,'');
        $this->mcaroll=$m;
        $this->mobile=$mo;  
    } 
    public function setvalue($m,$mo)
    {
        $this->mcaroll=$m;
        $this->mobile=$mo;
    }
    public function mcadisplay()
    {
        echo "Name : ".$this->name;
        echo "<br>MCA Roll No. : ".$this->mcaroll."<br>";
        echo "Mobile Number : ". $this->mobile;
    } 
};
$Student=new MCA("Vivek","MCA095","9745537212");
$Student->mcadisplay();
?>