<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // variables with echo vs print
        $name = "Damien";

        //Echo
        //Single quotes: echo 'Hy $name' = Hy $name
        //Double qoutes: echo "Hy $name" = Hy Damien
        //Doesn't have a return value

        echo "Hello {$name}";

        //Print
        //Has a return value of 1, can used as an expression

        // . (Concat)
        // New Line
        // with HTML <br>
        echo "<br>Hello " . $name . " Thorn"
    ?>
</body>
</html>