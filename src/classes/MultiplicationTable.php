<?php


class MultiplicationTable
{
    private readonly int $number;
    private array $results;

    public function __construct(int $number)
    {
        $this->number = $number;
        $this->results = [];
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getResults(): array
    {
        return $this->results;
    }

    public function calculate(): array
    {
        $results = [];
        for ($i = 1; $i < 11; $i++) {
            $this->results[$i] = $i * $this->number;
        }
        return $results;
    }

    public function getTable(): string
    {
        $str = "<table>";
        foreach ($this->results as $key => $value) {
            $str .= "<tr><td>$this->number * $key = $value</td></tr>";
        }
        $str .= "</table>";
        return $str;
    }
}
