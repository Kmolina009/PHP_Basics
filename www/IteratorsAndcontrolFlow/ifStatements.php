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
    $isMale = true;
    $isTall = false;
    if($isMale && $isTall){
        echo "You are Male and Tall";
    }elseif($isMale && !$isTall){
        echo "You are a Short Male";
    }
    else if(!$isMale && $isTall){
        echo "You are tall and not Male";
    }
    else{
        echo "You are not Male";
    }
?>
</html>