<?php
class studentBCA{
    public $Reg,$Name,$Age,$Sec;
    function setvariable($stdreg,$stdname,$stdage,$stdsec)
    {
        $this ->Reg=$stdreg;
        $this->Name=$stdname;
        $this->Age=$stdage;
        $this->Sec=$stdsec;
    }
    function display()
    {
        echo "<b>The student details are:</b> <br>";
        echo "&nbsp&nbsp&nbsp Registration No=".$this->Reg;
        echo "<br>&nbsp&nbsp&nbsp Name=".$this->Name;
        echo "<br>&nbsp&nbsp&nbsp Age=".$this->Age;
        echo "<br>&nbsp&nbsp&nbsp Section=".$this->Sec;
        
    }
};
$obj1=new StudentBCA();
$obj1->setvariable(2241041063,"Ankit kumar",21,'B');
$obj1->display();
?>