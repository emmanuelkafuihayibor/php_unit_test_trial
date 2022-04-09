<?php



class Test2 extends \PHPUnit\Framework\TestCase{

    public function test_that_two_numbers_are_not_equal(){
        // testing by contradiction

        $number1 = 5;
        $number2 = 2;

        if($number1 == $number2){
            return $this->assertEquals(1,2);
        }else{
            return $this->assertEquals(1,1);
        }
    }
}
 

//  We can conclude that our test by contradiction works perfectly ..


?>