<?php 
class PrimeNumberTest extends \PhpUnit_Framework_TestCase {
    
   private $prime;
   public function __construct() {
    $this->num = new Prime\Controllers\Numbers;
   }

   public function testThatNumberIsBeingSet() {
       $this->num->set(10);
       $this->assertEquals($this->num->get(), 10);
   }

    public function testToIdentifyAPrimeNumber(){
        $this->num->set(11);
        $this->assertTrue( $this->num->isPrime(), true);
    }

    public function testToIdentifyANonPrimeNumber(){
        $this->num->set(10);
        $this->assertFalse( $this->num->isPrime(), False);
    }
    public function testTenToGetTwoAndFivePrimeNumberPrimeFactors(){
        $this->num->set(10);
        $primeFactors = $this->num->getPrimeFactors();
        $rcount = count($primeFactors);
        $this->assertEquals($rcount,2);
        $this->assertEquals($primeFactors[0],2);
        $this->assertEquals($primeFactors[1],5);
    }
    public function testtwentyToGetTwoPrimeNumberPrimeFactor(){
        $this->num->set(16);
        $primeFactors = $this->num->getPrimeFactors();
        $rcount = count($primeFactors);
        $this->assertEquals($rcount,1);
        $this->assertEquals($primeFactors[0], 2);
    }
}