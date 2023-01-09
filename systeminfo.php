<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>System Info</title>
    </head>
    <body>
        <h1>Our First PHP Page</h1>
        <?php 
            echo date("m/d/y");
            echo "Does this work without a semi-colon above?";
            
            // get info from php about the environment
            phpinfo();
        ?>
    </body>
</html>