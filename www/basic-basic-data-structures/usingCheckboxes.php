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
<form action="usingCheckboxes.php" method="post">
    Apples:<input type="checkbox" name="fruit[]" value="apples"><br>
    Oranges:<input type="checkbox" name="fruit[]" value="oranges"><br>
    Durians:<input type="checkbox" name="fruit[]" value="durians"><br>
    Bananas:<input type="checkbox" name="fruit[]" value="bananas"><br>
    <input type="submit" value="Submit">
</form>
<!-- Using Checkboxes to get user input -->
    <?php
    $fruits = $_POST["fruit"];
    echo $fruits[0];
    echo "<br>";
    echo $fruits[2];
    echo count($fruits);
    ?>
</body>
</html>