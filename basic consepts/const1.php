<?php
class studentBCA{
    public $Reg,$Name,$Age,$Sec;
    function __construct($stdreg,$stdname,$stdage,$stdsec)
    {
        $this ->Reg=$stdreg;
        $this->Name=$stdname;
        $this->Age=$stdage;
        $this->Sec=$stdsec;
    }
    function __destruct()
    {
        echo "<b>The student details are:</b> <br>";
        echo "&nbsp&nbsp&nbsp Registration No=".$this->Reg;
        echo "<br>&nbsp&nbsp&nbsp Name=".$this->Name;
        echo "<br>&nbsp&nbsp&nbsp Age=".$this->Age;
        echo "<br>&nbsp&nbsp&nbsp Section=".$this->Sec."<br>";
        
    }
};
$obj1=new StudentBCA(2241041063,"Ankit kumar",21,'B');
$obj2=new StudentBCA(2241041064,"Anurag Randi",21,'B');
?>