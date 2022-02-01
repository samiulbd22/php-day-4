<?php


namespace App\classes;


class User
{
    public $city ='dhaka';
    protected $country ='bangladesh';
    private $area ='kawranbazar';

    public function login()
    {
        echo 'In log';
    }
    protected function logout()
    {
        echo 'In logout';
    }
    private function profile()
    {
        echo 'In profile';
    }
}