<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php print "What is up World!";
    ?>
    <br>
    <?php print date('Y-m-d');
    ?>
    <br>
    <?php 
    date_default_timezone_set('America/New_York');
    print date('h:i:sa');
    ?>
</body>
</html>