<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- container for multiple pieces of information that starts counting at zero,
 access via bracket notation, normally stored in a variable -->
<body>
<!-- must have server running in basic-basic-data-structures directory-->
<nav>
    <a href="/arrays.php">arrays</a>
    <a href="/usingCheckboxes.php">Using Checkboxes</a>
    <a href="/associativeArrays.php">Associative Array</a>
    <a href="/funtions.php">Functions</a>
    <a href="/returnStatements.php">returnStatements</a>
</nav>
    <?php
        $friends = array('Jim','Tim','Tom','John',42,false);
        echo "$friends <br>";
        echo $friends[0]; //print first element in array
        echo "<br>";
        echo $friends[0] = "Mudkip"; //print first element in array
        //Adding an element to the array
        echo "<br>";
        echo $friends[4] = "Mudkip"; //added to array
        echo "<br>";
        echo $friends[10] = "Mudkip"; // if there is not tenth array elem, then
        echo "<br>";                  //  it will add to the end of the array  
        //get the number of elements in an array
        echo count($friends);
    ?>
</body>
</html>