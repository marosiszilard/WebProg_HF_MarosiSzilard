<?php
include "Calculator.php";

class AdvancedCalculator extends Calculator
{
    private static $functions = array("pow"=>2, "sqrt"=>1, "exp"=>1);
    public function __construct($val1, $val2)
    {
        parent::__construct($val1, $val2);
    }

    public function __call($name, $arguments)
    {
        if(in_array($name, array_keys(self::$functions))){
            $arguments = array($this->val1);
            if(self::$functions["$name"] == 2){
                array_push($arguments, $this->val2);
            }
            return call_user_func_array($name, $arguments);
        }else {
            throw new Exception("Method doesn't exist");
//            die("Methos doesn't exist!");

        }
    }


}

$calc1 = new AdvancedCalculator(4, 2);
echo $calc1->pow();
echo '<br>';
echo $calc1 ->sqrt();
echo '<br>';
echo $calc1 -> exp();
echo '<br>';
echo $calc1 ->subtract();
?>
