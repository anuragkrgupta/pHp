<?php
class BCA{
    private $rollno;
    protected $name;
    public $age, $gender;
    protected function setName($stdName)
    {
        $this->name=$stdName;
    }

    private function setRoll($stdRoll){
        $this->rollno=$stdRoll;
    }
    public function setRem($stdAge, $stdGen){
        $this->setName("anurag kumar");
        $this->age = $stdAge;
        $this->gender = $stdGen;
    }
    public function display1(){
        echo "this BCA student details is <br> ";
        echo "\t Name: ".$this->name;
        echo "<br>\t Roll no.:".$this->rollno;
        echo "<br>\t Age :".$this->age;
        echo "<br>\t Gender :".$this->gender;
    }
}
class MCA extends BCA{
    private $mcaroll,$mobile;

    public function setValues($stdRoll,$stdMob){
        $this->mcaroll = $stdRoll;
        $this->mobile = $stdMob;
    }
    public function display2()
    {
        echo "this MCA student details is <br> ";
        $this->setName("A kumar");
        echo "\t Name: ".$this->name;
        echo "<br>\t Roll no.:".$this->mcaroll;
        echo "<br>\t Age :".$this->mobile;
    }
}
$obj=new MCA();
$obj->setRem(20, "Male");
$obj->display1();
$obj->setValues("MCA002", 456789132);
$obj->display2();
?>