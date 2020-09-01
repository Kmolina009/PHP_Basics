<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- must have server running in basic-basic-data-structures directory-->
<nav>
    <a href="/arrays.php">arrays</a>
    <a href="/usingCheckboxes.php">Using Checkboxes</a>
    <a href="/associativeArrays.php">Associative Array</a>
    <a href="/funtions.php">Functions</a>
    <a href="/returnStatements.php">returnStatements</a>
</nav>
<!-- When a function gives information back -->
<form action="returnStatements.php" method="post">
    <input type="number" name="number" id="">
    <input type="submit" name="submut" id="">
</form>
<br>
    <?php
    $num = $_POST["number"];
    function cube($num){
       return $num**3;
    }

    $cubeResult = cube($num);
    echo" $num cubed is $cubeResult";
    ?>
</body>
</html>