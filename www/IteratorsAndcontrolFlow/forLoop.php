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
    for ($i=0; $i <= 100 ; $i++) { 
        if ($i % 3 ===0) {
            echo "Fizz" . " ";
        }else if($i % 5 ===0){
            echo "Buzz". " ";
        }else if($i % 3 ===0 && $i % 5 ===0){
            echo "FizzBuzz"  . " ";
        }else {
            echo $i . " ";
        }
        
    }
    echo"<br><h4>Shapes</h4>";
    for ($i=0; $i <= 4; $i++) { 
        echo $i;
        if(count($i % 4 ===0){
            echo '<br>'
        })
    }

?>
</html>