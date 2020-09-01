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
</body>
<?php
    $num = 0;
    while($num <= 50){
        $num++;
        if($num % 10 === 1){
            echo "<br>";
        }
        if($num % 3===0){
            echo "Fizz" . " ";
        }
        else if($num % 5===0){
            echo "Buzz" . " ";
        }
        else if($num % 3===0 && $num % 5===0){
            echo "FizzBuzz" . " ";
        }
        else{
             echo $num . " ";
         }
    }
?>
</html>