<?php


namespace App\classes;


class Example
{
    public $student = [];
    public function index()
    {
        $this->student = [10,20,'bitm',10.20,true,false];
        echo $this->student[2];
    }
}