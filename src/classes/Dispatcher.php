<?php

class Dispatcher
{
    private float|null $result;
    private string $error;
    private float|string $a;
    private float|string $b;
    private string $operation;

    public function __construct()
    {
        $this->result = null;
        $this->error = "";
        $this->a = "";
        $this->b = "";
        $this->operation = "";
    }

    public function display(): void
    {
        if ($this->result === null) {
            echo $this->error;
        } else if ($this->operation == "sqrt") {
            echo "sqrt(" . $this->a . ")=" . $this->result;
        } else {
            echo $this->a . $this->operation . $this->b . "=" . $this->result;
        }
        echo "<br>";
    }

    public function dispatch(float|string $a, float|string $b, string $operation): void
    {
        if (!is_numeric($a) || $operation != "sqrt" && !is_numeric($b)) {
            return;
        }

        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;
        $this->result = null;
        $this->error = "";

        try {
            switch ($operation) {
                case "+":
                    $this->result = Calculator::sum($a, $b);
                    break;
                case "-":
                    $this->result = Calculator::sub($a, $b);
                    break;
                case "*":
                    $this->result = Calculator::multiply($a, $b);
                    break;
                case "/":
                    $this->result = Calculator::divide($a, $b);
                    break;
                case "%":
                    $this->result = Calculator::mod($a, $b);
                    break;
                case "sqrt":
                    $this->result = Calculator::sqrt($a);
                    break;
                case "^":
                    $this->result = Calculator::pow($a, $b);
                    break;
            }
        } catch (Error $error) {
            $this->error = $error->getMessage();
            return;
        }
        if ($this->result === null) {
            $this->error = "Unknown operation";
        }
    }
}