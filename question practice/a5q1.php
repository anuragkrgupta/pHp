<?php
class house
{
    public $room,$fan,$window,$washroom;
    function ghar($stdroom,$stdfan,$stdwindow,$stdwashroom)
    {
        $this->room=$stdroom;
        $this->fan=$stdfan;
        $this->window=$stdwindow;
        $this->washroom=$stdwashroom;
    }
    private function display()
    {
        echo "<br>The room is: ".$this->room;
        echo "<br>The fan is: ".$this->fan;
        echo "<br>The window is: ".$this->window;
        echo "<br>The washroom is: ".$this->washroom;
    }
    function disp()
    {
        $this->display();
    }
};
$obj1=new House();
$obj2=new House();
$obj1->ghar("master","usha","glass","italian");
$obj2->ghar("kid","local","titanium","African");
$obj1->disp();
$obj2->disp();
?>