<?php


namespace App\classes;
use App\classes\User;

class Calculator extends User
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;
    //public $user;

    public function __construct($data) //masic method $data means parameter
    {
        //echo $data;
        //echo is_array($data) ? 'data is array': 'data is single variable'; //ternary opertor ?=if,:=else

        $this->firstNumber = $data['first_num'];
        $this->secondNumber = $data['second_num'];
        $this->operator = $data['operator'];
    }

    public function index() //method or function
//        access modifyr public private protected amader class gulote j property gulo thake ta secure kora.//
    {
//        $this->user = new User();
//        echo $this->user->city;
       // echo $this->login();
        //extands chara class use only public///
       // $this->user = new User();
        //$this->user->city;
        //echo $this->multification();

        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;

            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multification();
                break;

        }
        return $this->result;

    }

    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    protected function multification()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    protected function divition()
    {
        return $this->firstNumber / $this->secondNumber;
    }

}