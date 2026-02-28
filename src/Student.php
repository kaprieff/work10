<?php

namespace App;

class Student
{
    private string $firstName;
    private string $lastName;
    private array $grades = [];

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function addGrade(int|float $grade): void
    {
        if ($grade < 0 || $grade > 100) {
            throw new \InvalidArgumentException("Оценка должна быть от 0 до 100");
        }
        $this->grades[] = $grade;
    }

    public function getAverage(): float
    {
        if (empty($this->grades)) {
            return 0.0;
        }
        return array_sum($this->grades) / count($this->grades);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}