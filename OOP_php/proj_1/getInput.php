<?php
    //include('OOP_php/inc/header.php');
    require_once('OOP_php/proj_1/inc/functions.php');
    $title = 'PHP_Basics';

    //Validation filter_input()
    $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);
    
    if($category == false || $limit == false) {
        //if the input is not an integer then it stops
        die();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP_Basics: <?= $title; ?></title>
</head>
<body>
    <div class="container">   
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Get Input</h1>
            </div>    
        </div>
        <div class="row">
            Categories: <?= $category; ?> Limit: <?= $limit; ?>
        </div>
    </div>
<?php 

    //include('OOP_php/inc/footer.php');
?>