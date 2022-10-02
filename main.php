<?php
    include('OOP_php/inc/header.php');
    require('OOP_php/inc/functions.php');
    $title = 'PHP_Basics';

    $mangaInfo = [
        ['name' => 'One Piece', 'Writer' => 'Eiichiro Oda'],
        ['name' => 'Re:Zero', 'Writer' => 'Nagatsuki Teppei'],
        ['name' => 'Berserk', 'Writer' => 'Miura Kentaro']
    ];

    $mangaPluck = pluck($mangaInfo, 'name');
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
                <h1 class="mt-5">Manga I've read</h1>
            </div>    
        </div>
    </div>
    <div>
        <?= output($mangaPluck); ?>
    </div>
<?php 

    include('OOP_php/inc/footer.php');
?>