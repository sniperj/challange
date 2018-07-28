<?php namespace Prime\Controllers;

class Numbers {
    private $number ;
    private $startNumber = 2;

    public function set($number) {
        $this->number = $number ;
    }

    public function get() {
        return $this->number;
    }
    public function isPrime($number=null) {
        $isPrime = true;
        $startNumber = $this->startNumber;
        $number = is_null($number)?$this->number:$number;
        $endNumber = $number-1;

        for($i=$startNumber; $i<=$endNumber;$i++) {
            if (($number % $i) === 0) {
                $isPrime = false;
            }
        }
        return $isPrime;
    }
    public function getPrimeFactors() {    
        if(!$this->isPrime()){
            $startNumber = $this->startNumber;
            $endNumber = $this->number -1;
            $arrPrime = [];
            for($i=$startNumber; $i<=$endNumber;$i++) {
                if (($this->number % $i) === 0) {
                    if($this->isPrime($i)) {
                        array_push($arrPrime, $i);
                    }  
                }
            }
        }  else {
            return false;
        }
        return $arrPrime;
    }
}