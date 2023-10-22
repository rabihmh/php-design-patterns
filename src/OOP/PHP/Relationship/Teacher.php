<?php

namespace App\OOP\PHP\Relationship;

use App\OOP\PHP\Relationship\Printer\Printer;

abstract class Teacher
{
    protected string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function sayWelcome(Printer $printer): string
    {
        $printer->setStringToBePrinted($this->name);
        return $printer->printToScreen();
    }

    abstract public function assignAHomework(): string;


    public function evaluateStudentHomework(Student $student): string
    {
        if ($student->getHomeworkScore() >= 50) {
            return "success";
        }
        return "failed";
    }

}