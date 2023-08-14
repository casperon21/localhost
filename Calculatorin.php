<?php
class Calculatorin {
    private $number1;
    private $number2;
    private $sign;
    private function calculate1()
    {

        if ($this->sign == '+') {
             return $this->number1 + $this->number2;
        } elseif ($this->sign == '-') {
            return $this->number1 - $this->number2;
        } elseif ($this->sign == '*') {
            return $this->number1 * $this->number2;
        } elseif ($this->sign == '/') {
            return $this->number1 / $this->number2;
        }
        return null;

    }
    public function calculate()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $input=$_POST['numb1'];
            preg_match('/^\s*([\d.]+)\s*([\+\-\*\/])\s*([\d.]+)\s*$/', $input, $matches);
            $this->number1 = $matches[1];
            $this->sign = $matches[2];
            $this->number2 = $matches[3];
            $callback = $this->calculate1();
            if ($callback !== null) {
                return "<h1>Результат: </h1>" . $input . " = " . $callback;
            } else {
                return "Not valuable operator";
            }
        }
    }
}