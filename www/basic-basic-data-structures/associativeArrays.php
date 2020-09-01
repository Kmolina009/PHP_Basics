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
    <a href="/associativeArrays_2.php">Associative Array Form Submission</a>
    <a href="/funtions.php">Functions</a>
    <a href="/returnStatements.php">returnStatements</a>
</nav>
<!--array that contains key:value pairs like objects in JS  -->
<!-- school app storing students,grades -->
    <?php
    // map key with value
    $grades = array("Jim" => "A+","Pam" => "B-","DumpleDan"=>"SSS");
    print $grades[0];//return nothing
    print $grades["Jim"]; // return value of key's value, that said make sure the keys are unique
    print $grades[""]
    ?>
</body>
</html>