<?php

class ExamenTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include_once('./src/functions272.php');
    }

    public function test270a(){
        $this->assertFileExists('./src/270a.php');
    }
    // tests
    public function test272FecIng(){
        $this->assertEquals('2016/06/23',fecha_inglesa('23.06.2016'));
    }

    public function test272Vell()
    {
        $this->assertEquals(3,vell([0 => '23.06.2016',1 =>'22.07.2018',2 =>'10.06.2021',3 =>'16.06.2006']));
        $this->assertEquals(0,vell([0 =>'16.06.2006',1 => '23.06.2016',2 =>'22.07.2018',3 =>'10.06.2021']));
    }

    public function test272Laureado()
    {
       $this->assertEquals('alcoi', laureado(['barcelona','madrid','barcelona','alcoi','alcoi','alcoi']));
       $this->assertEquals('barcelona', laureado(['barcelona','madrid','barcelona','alcoi','alcoi','barcelona']));
    }

    public function test273Jove()
    {
        $this->assertEquals([1 => 18],jove([0 =>'1980',1 =>'1975'],[0 =>'01.01.1999',1 =>'01.01.1993']));
        $this->assertEquals([2 => 16],jove([0 =>'1980',1 =>'1975',2 =>'2000'],[0 =>'01.01.1999',1 =>'01.01.1993',2 =>'01.01.2016']));
    }

    public function test273Any(){
        $this->assertEquals('1999', any('01.12.1999'));
    }

}