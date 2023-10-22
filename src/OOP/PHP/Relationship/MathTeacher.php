<?php

namespace App\OOP\PHP\Relationship;

class MathTeacher extends Teacher
{

    public function assignAHomework(): string
    {
        return "Calculate the sum of 10 and 12";
    }
}