<?php

use PHPUnit\Framework\TestCase;
require_once "Salebonus.php";

class BonusTest extends TestCase
{
    private $bonus;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->bonus = new Bonus();
    }
 
    protected function tearDown(): void
    {
        $this->bonus = NULL;
        parent::tearDown();
    }

    //Test of User Requirement / Specification 
    //Equivalence Partitioning (+/-)
    //Boundary Value Analysis / Limit Testing 
    //Decision Table 
    //Cause Effect Graph 
    //Error Guessing

    //testBVA_1 input 1
    public function testBVA_1_1()
    {
        $sale = 55;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('500000', $bonus); 
    }

    //testBVA_1 input 2
    public function testBVA_1_2()
    {
        $sale = 54;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('500000', $bonus); 
    }

    //testBVA_1 input 3
    public function testBVA_1_3()
    {
        $sale = 33;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('500000', $bonus); 
    }

    //testBVA_1 input 4
    public function testBVA_1_4()
    {
        $sale = 32;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('500000', $bonus); 
    }

    //testBVA_1 input 5
    public function testBVA_1_5()
    {
        $sale = 31;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('500000', $bonus); 
    }



    //testBVA_2 input 1
    public function testBVA_2_1()
    {
        $sale = 30;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('400000', $bonus); 
    }

    //testBVA_2 input 2
    public function testBVA_2_2()
    {
        $sale = 29;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('400000', $bonus); 
    }
    
    //testBVA_2 input 3
    public function testBVA_2_3()
    {
        $sale = 28;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('400000', $bonus); 
    }

    //testBVA_2 input 4
    public function testBVA_2_4()
    {
        $sale = 22;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('400000', $bonus); 
    }

    //testBVA_2 input 5
    public function testBVA_2_5()
    {
        $sale = 21;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('400000', $bonus); 
    }



    // //testBVA_3 input 1
    public function testBVA_3_1()
    {
        $sale = 20;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('300000', $bonus); 
    }

    // //testBVA_3 input 2
    public function testBVA_3_2()
    {
        $sale = 19;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('300000', $bonus); 
    }

    // //testBVA_3 input 3
    public function testBVA_3_3()
    {
        $sale = 14;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('300000', $bonus); 
    }

    // //testBVA_3 input 4
    public function testBVA_3_4()
    {
        $sale = 12;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('300000', $bonus); 
    }

    // //testBVA_3 input 5
    public function testBVA_3_5()
    {
        $sale = 11;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('300000', $bonus); 
    }

    

    // //testBVA_4 input 1
    public function testBVA_4_1()
    {
        $sale = 10;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('200000', $bonus); 
    }

    // //testBVA_4 input 2
    public function testBVA_4_2()
    {
        $sale = 9;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('200000', $bonus); 
    }

    // //testBVA_4 input 3
    public function testBVA_4_3()
    {
        $sale = 8;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('200000', $bonus); 
    }

    // //testBVA_4 input 4
    public function testBVA_4_4()
    {
        $sale = 7;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('200000', $bonus); 
    }

    // //testBVA_4 input 5
    public function testBVA_4_5()
    {
        $sale = 6;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('200000', $bonus); 
    }



    // //testBVA_5 input 1
    public function testBVA_5_1()
    {
        $sale = 5;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('100000', $bonus); 
    }

    // //testBVA_5 input 2
    public function testBVA_5_2()
    {
        $sale = 4;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('100000', $bonus); 
    }

    // //testBVA_5 input 3
    public function testBVA_5_3()
    {
        $sale = 3;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('100000', $bonus); 
    }

    // //testBVA_5 input 4
    public function testBVA_5_4()
    {
        $sale = 2;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('100000', $bonus); 
    }

    // //testBVA_5 input 5
    public function testBVA_5_5()
    {
        $sale = 1;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('100000', $bonus); 
    }



    // //testBVA_6 input 1
    public function testBVA_6_1()
    {
        $sale = 1;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('0', $bonus); 
    }

    // //testBVA_6 input 2
    public function testBVA_6_2()
    {
        $sale = 0;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('0', $bonus); 
    }

    // //testBVA_6 input 3
    public function testBVA_6_3()
    {
        $sale = -1;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('Input harus berupa bilangan bulat >=0', $bonus); 
    }



    // //testEQP_1 Negative Testing
    public function testEQP_1_NT()
    {
        $sale = 27;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('500000', $bonus); 
    }

    // //testEQP_2 Negative Testing
    public function testEQP_2_NT()
    {
        $sale = 19;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('400000', $bonus); 
    }

    // //testEQP_3 Negative Testing
    public function testEQP_3_NT()
    {
        $sale = 7;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('300000', $bonus); 
    }

    // //testEQP_4 Negative Testing
    public function testEQP_4_NT()
    {
        $sale = 5;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('200000', $bonus); 
    }

    // //testEQP_5 Negative Testing
    public function testEQP_5_NT()
    {
        $sale = 0;
        $bonus = $this->bonus->getBonus($sale);
        $this->assertEquals('100000', $bonus); 
    }
    


    // //testDT_1
    public function testDT_1()
    {
        $sale = 5.5;
        $bonus = $this->bonus->checkDecimal($sale);
        $this->assertEquals('Input harus berupa angka bulat', $bonus); 
    }

    // //testDT_2
    public function testDT_2()
    {
        $sale = 'Dua';
        $bonus = $this->bonus->checkNumeric($sale);
        $this->assertEquals('Input harus berupa angka', $bonus); 
    }

    


}