<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Variables</title>
    </head>
    <body>
    <?php
    // try some numbers
    $x = 30;
    $y = 10;
    $z = $x + $y;

    echo $z;
    $z = "I am now a string"; // not recommended but permitted
    echo $z;

    // experiment with strings
    $first = "Rich";
    $last = "Freeman";
    $name = $first . ' ' . $last; // php uses . to join or concatenate strings 
    echo $name;
    echo "Hello $name"; // we can inject vars directly inside DOUBLE quotes only
    echo 'Hello $name';

    ?>
    </body>
</html>