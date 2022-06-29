<?php
class Test {
    static $x = 102;
    public static function returnY(){
        //  $sasa = self::$x;
         echo self::$x;
       }
   }
class Test2 extends Test{
    public function __call($method, $arg_array){
        echo"<br>";
        echo "not call method";
    }
    public static function returnY(){
        // $sasa = 123;
        // echo $sasa;
        // parent::returnY();
        parent::returnY();
      }
};

Test::returnY();
$obj =new Test2;
 $obj->sasa();
// $test2Obj = new Test2;
// $test2Obj->returnY();
//    echo Test::returnY();
// $testObj = new Test;
// echo $testObj ->returnY();
// var_dump($testObj);
// class Test2 extends Test {
//     public function returnX(){
       
//     }
// }