<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <?php
    include 'class.php';

    $obj = new Car();

    $obj->owner();


    $obj2 = new Phone();

    echo '<br>';
    echo $obj2->display;

    ?>
</body>
</html>