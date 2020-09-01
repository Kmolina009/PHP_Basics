<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="/ifStatements.php">IF Statements</a>
    <a href="/ifElseStatements.php">IfElse Statements</a>
    <a href="/whileLoop.php">While Loop</a>
    <a href="/forLoop.php">For Loop</a>
   
</nav>
<!-- Using Comparison Operators -->
</body>
<?php
    function getMax($num1,$num2,$num3){
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        }else if($num2 >= $num1 && $num2 >= $num3){
            return $num2;
        }else{
            return $num3;
        }
    }
    echo getMax(3, 90,42);

    //conditionals are used a lot in control flow. Together you may manipulate the logiv gates as needed.
?>
</html>