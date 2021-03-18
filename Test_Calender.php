<?php
 include "Calender.php";

 use PHPUnit\Framework\TestCase;

 class Test_Calender extends TestCase{
     private $calender;

     public function setUp():void{
         $this->calender = new Calender();
     }

     public function testday1(){
         $this->assertEquals('Wednesday',$this->calender->showDay(03,02));
     }

     public function testday2(){
        $this->assertEquals('Friday',$this->calender->showDay(15,01));
    }

    public function testday3(){
        $this->assertEquals('Tuesday',$this->calender->showDay(20,04));
    }
 }