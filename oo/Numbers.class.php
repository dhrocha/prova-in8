<?php

class Numbers
{

    private $num1 = 0;
    private $num2 = 0;
    private $num3 = 0;

    public function setNum1($num)
    {
        $this->num1 = $num;
    }

    public function setNum2($num)
    {
        $this->num2 = $num;
    }

    public function setNum3($num)
    {
        $this->num3 = $num;
    }

    public function getNum1()
    {
        return $this->num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    public function getNum3()
    {
        return $this->num3;
    }

    public function multiplicar()
    {

        return $this->num1 * $this->num2 * $this->num3;
    }
}
