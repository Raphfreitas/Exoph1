<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $_nombre = 600;
        $_nb = rand(0,1000);
        $_tirage = 0;
        while ($_nombre != $_nb) 
        {
            $_nb=rand(0,1000);
            $_tirage +=1;
        }
        echo $_tirage;


    ?>
</body>
</html>