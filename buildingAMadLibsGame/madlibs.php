<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tiny Mad Lib</h1>
    <form action="madlibs.php" method="get"><br>
        Object: <input type="text" name="object1" id="object1"><br>
        Color: <input type="text" name="color1" id="color1"><br>
        Another Object: <input type="text" name="object2" id="object2"><br>
        Another Color: <input type="text" name="color2" id="color2"><br>
        A Flavor: <input type="text" name="flavor" id="flavor"><br>
        <input type="submit" value="LibTime!">
    </form>

    <?php
    $object1 = $_GET["object1"];
    $color1 =  $_GET["color1"];
    $object2 = $_GET["object2"];
    $color2 =  $_GET["color2"];
    $flavor = $_GET["flavor"];
        echo "$object1 are $color1,<br>";
        echo "$object1 are $color1,<br>";
        echo "Sugar is $flavor,<br>";
        echo "And so are you.<br>";
    ?>
</body>
</html>