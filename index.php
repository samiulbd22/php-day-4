<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php 3rd class</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="#" class="nav-link">Calculator</a></li>
            <li><a href="#" class="nav-link">Series</a></li>
        </ul>
    </div>
    </nav>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">


                <div class="card">
                    <div class="card-header">My calculator</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="first_num" class="form-control" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Select Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="second_num" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Second Number</label>
                                <div class="col-md-9">
                                    <label><input type="radio"  name="operator" value="+" checked/>Addition</label>
                                    <label><input type="radio"  name="operator" value="-"/>Substruction</label>
                                    <label><input type="radio"  name="operator" value="*"/>Multification</label>
                                    <label><input type="radio"  name="operator" value="/"/>Devision</label>
                                    <label><input type="radio"  name="operator" value="%"/>Remainder</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <input type="text" readonly value="<?php echo isset($x) ? $x:'';?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success" name="btn" value="submit"/>
<!--                                    <input type="submit" name="optor" class="btn btn-outline-success" name="btn" value="-"/>-->
<!--                                    <input type="submit" name="optor" class="btn btn-outline-success" name="btn" value="*"/>-->
<!--                                    <input type="submit" name="optor" class="btn btn-outline-success" name="btn" value="/"/>-->
<!--                                    <input type="submit" name="optor" class="btn btn-outline-success" name="btn" value="%"/>-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-header"></div>
                </div>


            </div>
        </div>
    </div>
</section>

    <script src="Assets/js/jquery-3.6.0.min.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
</body>
</html>






<?php
//    require_once 'vendor/autoload.php';
//    use App\classes\Calculator;
//    //$calculator = new Calculator([10,20,'bitm',50.20]); ///object has 3 property
//    $calculator = new Calculator('shabuddin'); ///object has 3 property
//    $calculator->index(); ///object has 3 property
//    //$calculator->index(); ///task  catch object
//    //echo $calculator->operator; ///task  catch property
