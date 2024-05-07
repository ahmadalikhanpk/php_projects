<?php

class Calculator {
    private $numbers;
    private $firstValue;
    private $operator;
    private $secondValue;
    private $num;
    private $previousNum;

    public function __construct() {
        $this->numbers = "num";
        $this->firstValue = "";
        $this->operator = "op";
        $this->secondValue = "";
        $this->num = "";


        if (isset($_POST['input'])) {
            $this->num = $_POST['input'];
        }
        if (isset($_POST['clear'])) {
            $this->num = "";
        }

        if (isset($_POST['num'])) {
            $this->num .= $_POST['num'];
        }

        if (isset($_POST['op'])) {
            $this->firstValue = $this->num;
            setcookie($this->numbers, $this->firstValue, time() + (86400 * 30), "/");

            $this->secondValue = $_POST['op'];
            setcookie($this->operator, $this->secondValue, time() + (86400 * 30), "/");
            $this->num = "";
        }

        if (isset($_POST['equal'])) {
            $this->num = $_POST['input'];
            $this->previousNum = $_COOKIE[$this->numbers];

            if (!is_numeric($this->num) || !is_numeric($this->previousNum)) {
                echo "Invalid input";
            } else {
                $this->performCalculation();
            }
        }
    }

    private function performCalculation() {
        switch ($_COOKIE[$this->operator]) {
            case "+":
                $result = $_COOKIE[$this->numbers] + $this->num;
                break;
            case "-":
                $result = $_COOKIE[$this->numbers] - $this->num;
                break;
            case "*":
                $result = $_COOKIE[$this->numbers] * $this->num;
                break;
            case "/":
                if ($this->num == 0) {
                    $this->num = 0;
                    return;
                }
                $result = $_COOKIE[$this->numbers] / $this->num;
                break;
        }
        $this->num = $result;
    }

    public function getResult() {
        return $this->num;
    }
}

$calculator = new Calculator();

?>