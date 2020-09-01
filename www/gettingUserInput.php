<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
     <input type="text" name="number1" id="num1">
     <input type="text" name="operator" id="operator">
     <input type="text" name="number2" id="num2">
     <input type="submit" value="Get Result">
     <hr>
</form>
    <?php
    switch($_GET["operator"]){
        case "+":
            echo  $_GET["number1"] + $_GET["number2"] ;
            break;
        case "-":
            echo $_GET["number1"] - $_GET["number2"] ;
            break;
        case "*":
            echo $_GET["number1"] * $_GET["number2"] ;
            break;
        case "/":
            echo $_GET["number1"] / $_GET["number2"] ;
            break;
    }
   
    echo("<h6><a href=\"site.php\">Back to Home</a></h6>");
    ?>
</body>
</html>