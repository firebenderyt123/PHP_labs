<?php

class Country
{
    private static array $countries = [];
    private readonly string $name;
    private readonly string $capital;
    private readonly int $capital_population;

    public function __construct(string $name, string $capital, int $capital_population)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->capital_population = $capital_population;
        Country::$countries[] = $this;
    }

    public static function getTable(): string
    {
        $str = "<table>";
        $str .= "<th>Країна</th>";
        $str .= "<th>Столиця</th>";
        $str .= "<th>Населення столиці</th>";
        foreach (Country::$countries as $country) {
            $str .= "<tr>";
            $str .= "<td>$country->name</td>";
            $str .= "<td>$country->capital</td>";
            $str .= "<td>$country->capital_population</td>";
            $str .= "</tr>";
        }
        $str .= "</table>";
        return $str;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCapital(): string
    {
        return $this->capital;
    }

    public function getCapitalPopulation(): int
    {
        return $this->capital_population;
    }
}