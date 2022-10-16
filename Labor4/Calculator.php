<?php
class Calculator
{
    private $val1;
    private $val2;

    public function __construct(float $val1, float $val2)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }


    public function add(): float
    {
        return $this->val1 + $this->val2;

    }

    public function subtract(): float
    {
        return $this->val1 - $this->val2;
    }

    public function multiply(): float
    {
        return $this->val1 * $this->val2;
    }

    public function divide(): float
    {
        return $this->val1 / $this->val2;
    }

    public function __set(string $name, $value)
    {
        $this->$name = $value;
    }

    public function __get(string $name)
    {
        return $this->$name;
    }
}
?>
