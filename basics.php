<?php
    $title = 'PHP_Basics';

    $favManga = [
        'Tenshura',
        'Danmachi',
        'Berserk'
    ];

    $kvpManga = [
        'Tenshura' => '4/5',
        'Danmachi' => '4/5',
        'Berserk' => '5/5'    
    ];

    //Function (called in the HTML down below)
    function sum($a, $b) {
        return $a+$b;
    }

    $result = sum(1, 2);

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
    <?php

        // variables with echo vs print
        $name = "Damien";

        //Echo--------------------
        //Single quotes: echo 'Hy $name' = Hy $name
        //Double qoutes: echo "Hy $name" = Hy Damien
        //Doesn't have a return value

        echo "Hello {$name}";

        //Print--------------------
        //Has a return value of 1, can used as an expression

        // . (Concat)
        // New Line
        // with HTML <br>

        echo "<br>Hello " . $name . " Thorn<br>";

        //Array--------------------
        $mangaList = array("RE:Zero", 2015, 75.304);
        $newList = ["RE:Zero", 2015, 75.304];
        print_r($newList);  // shows index & value

            //isset() <-- checks if the value exists or not

        if(isset($newList[3])) {
            echo '<br>' . 'Found';
        } else {
            echo '<br>' . 'Not found';
        }


        //Associative array--------------------
        $mangaList2 = [
            'Tenshura' => '4/5',
            'Danmachi' => '4/5',
            'Berserk' => '5/5'
        ];

        echo '<br>' . $mangaList2['Danmachi'];

        //var_dump(variable)
        //deletes a variable

    ?>


    <!-- Loops -->
    <div class="container">   
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Manga I've read</h1>
                <?= $result ?>
                <table class="table table-striped">
                <?php 
                
                    foreach($favManga as $manga) {
                        echo "<tr><td>$manga</td></tr>";    
                    }

                    foreach($kvpManga as $key => $manga) {
                        echo "<tr><td>$key</td><td>$manga</td></tr>";    
                    }

                    for($i = 0; $i < count($favManga); $i++) {
                        echo "<tr><td>$favManga[$i]</td></tr>"; 
                    }

                    $i = 0;

                    while($i < count($favManga)) {
                        echo "<tr><td>$favManga[$i]</td></tr>"; 
                        $i++;
                    }
                
                ?>
                </table>
            </div>    
        </div>
    </div>
</body>
</html>