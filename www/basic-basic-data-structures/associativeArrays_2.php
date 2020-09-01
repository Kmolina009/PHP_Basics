<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="/arrays.php">arrays</a>
    <a href="/usingCheckboxes.php">Using Checkboxes</a>
    <a href="/associativeArrays.php">Associative Array</a>
    <a href="/associativeArrays_2.php">Associative Array Form Submission</a>
    <a href="/funtions.php">Functions</a>
    <a href="/returnStatements.php">returnStatements</a>
</nav>
    <form action="" method="post">
        <input type="text" name="student" id="">
        <input type="submit" value="">        
    </form>
    <?php
    $grades = array("Jim" => "A+","Pam" => "B-","DumpleDan"=>"SSS");
    echo $grades[$_POST["student"]];//User submits name -> return values
    ?>
</body>
</html>