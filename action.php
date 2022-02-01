<?php
    require_once 'vendor/autoload.php';
    use App\classes\Calculator;
//    echo '<pre>';
//    print_r($_POST);
    if (isset($_POST['operator']))
    {
        $calculator = new Calculator($_POST);
        $x = $calculator->index();
        include 'index.php';
    }else
    {
        header('Location:index.php');
    }

//

