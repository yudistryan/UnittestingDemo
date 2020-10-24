<?php

use PHPUnit\Framework\TestCase;
require_once "MapScale.php";

class ScaleTest extends TestCase
{
    private $map;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->distance = new distance();
    }
 
    protected function tearDown(): void
    {
        $this->distance = NULL;
        parent::tearDown();
    }

    //Test of User Requirement / Specification 
    //Equivalence Partitioning (+/-)
    //Boundary Value Analysis / Limit Testing 
    //Decision Table 
    //Cause Effect Graph 
    //Error Guessing

    //test case 1
    public function test_1()
    {
        $map = -2;
        $dist = $this->distance->checkNegative($map);
        $this->assertEquals('Input harus berupa bilangan positif', $dist); 
    }

    // //test case 2
    public function test_2()
    {
        $map = 10;
        $dist = $this->distance->getDistance3($map);
        $this->assertEquals('30', $dist); 
    }

    // //test case 3
    public function test_3()
    {
        $map = 0;
        $dist = $this->distance->getDistance3($map);
        $this->assertEquals('0', $dist); 
    }

    // //test case 4
    public function test_4()
    {
        $map = 0;
        $dist = $this->distance->getDistance3($map);
        $this->assertEquals('0', $dist); 
    }

    // //test case 5
    public function test_5()
    {
        $map = 0.1;
        $dist = $this->distance->getDistance3($map);
        $this->assertEquals('0.3', $dist); 
    }

    // //test case 6
    public function test_6()
    {
        $map = 56;
        $dist = $this->distance->getDistance3($map);
        $this->assertEquals('168', $dist); 
    }

    // //test case 7
    public function test_7()
    {
        $map = 99.9;
        $dist = $this->distance->getDistance3($map);
        $this->assertEquals('299.7', $dist); 
    }

    // //test case 8
    public function test_8()
    {
        $map = 101;
        $dist = $this->distance->checkUpperBound($map);
        $this->assertEquals('Input tidak boleh lebih dari 100', $dist); 
    }

     //test case 9
     public function test_9()
     {
         $map = 100;
         $dist = $this->distance->getDistance3($map);
         $this->assertEquals('300', $dist); 
     }
 
     //test case 10
     public function test_10()
     {
         $map = -6;
         $dist = $this->distance->checkNegative($map);
         $this->assertEquals('Input harus berupa bilangan positif', $dist); 
     }
 
     //test case 11
     public function test_11()
     {
         $map = 22;
         $dist = $this->distance->getDistance2($map);
         $this->assertEquals('44', $dist); 
     }
 
     //test case 12
     public function test_12()
     {
         $map = 0;
         $dist = $this->distance->getDistance2($map);
         $this->assertEquals('0', $dist); 
     }
 
     //test case 13
     public function test_13()
     {
         $map = 2.5;
         $dist = $this->distance->getDistance2($map);
         $this->assertEquals('5', $dist); 
     }
 
     //test case 14
     public function test_14()
     {
         $map = 0.1;
         $dist = $this->distance->getDistance2($map);
         $this->assertEquals('0.2', $dist); 
     }
 
     //test case 15
     public function test_15()
     {
         $map = 56;
         $dist = $this->distance->getDistance2($map);
         $this->assertEquals('112', $dist); 
     }
 
     //test case 16
     public function test_16()
     {
         $map = 99.9;
         $dist = $this->distance->getDistance2($map);
         $this->assertEquals('199.8', $dist); 
     }
 
     //test case 17
     public function test_17()
     {
         $map = 102;
         $dist = $this->distance->checkUpperBound($map);
         $this->assertEquals('Input tidak boleh lebih dari 100', $dist); 
     }
 
     //test case 18
     public function test_18()
     {
         $map = 100;
         $dist = $this->distance->getDistance2($map);
         $this->assertEquals('200', $dist); 
     }
 
     //test case 19
     public function test_19()
     {
         $map = -10;
         $dist = $this->distance->checkNegative($map);
         $this->assertEquals('Input harus berupa bilangan positif', $dist); 
     }
 
     //test case 20
     public function test_20()
     {
         $map = 50;
         $dist = $this->distance->getDistance1($map);
         $this->assertEquals('50', $dist); 
     }

     //test case 21
     public function test_21()
     {
         $map = 0;
         $dist = $this->distance->getDistance1($map);
         $this->assertEquals('0', $dist); 
     }
 
     //test case 22
     public function test_22()
     {
         $map = 2.5;
         $dist = $this->distance->getDistance1($map);
         $this->assertEquals('2.5', $dist); 
     }
 
     //test case 23
     public function test_23()
     {
         $map = 0.1;
         $dist = $this->distance->getDistance1($map);
         $this->assertEquals('0.1', $dist); 
     }
 
     //test case 24
     public function test_24()
     {
         $map = 56;
         $dist = $this->distance->getDistance1($map);
         $this->assertEquals('56', $dist); 
     }
     //test case 25
     public function test_25()
     {
         $map = 99.9;
         $dist = $this->distance->getDistance1($map);
         $this->assertEquals('99.9', $dist); 
     }
 
  //test case 26
     public function test_26()
     {
         $map = 103;
         $dist = $this->distance->checkUpperBound($map);
         $this->assertEquals('Input tidak boleh lebih dari 100', $dist); 
     }
 
  //test case 27
     public function test_27()
     {
         $map = 100;
         $dist = $this->distance->getDistance1($map);
         $this->assertEquals('100', $dist); 
     }
 
     //test case 28
     public function test_28()
     {
         $map = -7;
         $dist = $this->distance->checkNegative($map);
         $this->assertEquals('Input harus berupa bilangan positif', $dist); 
     }
 
     //test case 29
     public function test_29()
     {
         $map = 2;
         $dist = $this->distance->getDistance5($map);
         $this->assertEquals('10', $dist);
     }
 
     //test case 30
     public function test_30()
     {
         $map = 4.7;
         $dist = $this->distance->getDistance5($map);
         $this->assertEquals('23.5', $dist); 
     }

      //test case 31
    public function test_31()
    {
        $map = 0;
        $dist = $this->distance->getDistance5($map);
        $this->assertEquals('0', $dist); 
    }

 //test case 32
    public function test_32()
    {
        $map = 0.1;
        $dist = $this->distance->getDistance5($map);
        $this->assertEquals('0.5', $dist); 
    }

 //test case 33
    public function test_33()
    {
        $map = 56;
        $dist = $this->distance->getDistance5($map);
        $this->assertEquals('280', $dist); 
    }

 //test case 34
    public function test_34()
    {
        $map = 99.9;
        $dist = $this->distance->getDistance5($map);
        $this->assertEquals('499.5', $dist); 
    }
 //test case 35
    public function test_35()
    {
        $map = 104;
        $dist = $this->distance->checkUpperBound($map);
        $this->assertEquals('Input tidak boleh lebih dari 100', $dist); 
    }

 //test case 36
    public function test_36()
    {
        $map = 100;
        $dist = $this->distance->getDistance5($map);
        $this->assertEquals('500', $dist); 
    }

 //test case 37
    public function test_37()
    {
        $map = -2;
        $dist = $this->distance->checkNegative($map);
        $this->assertEquals('Input harus berupa bilangan positif', $dist); 
    }

 //test case 38
    public function test_38()
    {
        $map = 25;
        $dist = $this->distance->getDistance6($map);
        $this->assertEquals('150', $dist); 
    }

    //test case 39
    public function test_39()
    {
        $map = 2.5;
        $dist = $this->distance->getDistance6($map);
        $this->assertEquals('15', $dist); 
    }

    //test case 40
    public function test_40()
    {
        $map = 0.1;
        $dist = $this->distance->getDistance6($map);
        $this->assertEquals('0.6', $dist); 
    }

 
 

    


}