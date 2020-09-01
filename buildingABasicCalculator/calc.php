<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Basic PHP Calc</title>
</head>
<body>
<div class="calculator">
<h1>Basic PHP Calc</h1>
<form>
    <div class="numberWrapper">
        <input type="number" name="number1" id="num1" class="numberInput">
        <input type="number" name="number2" id="num2" class="numberInput">
    </div>
     <input type="text" name="operator" id="operator">
     <input type="submit" value="Get Result" class="submitBtn">

</form>
    <?php
    $numberCheck ="/[0-9]/";
    $calculationOutput="";
    switch($_GET["operator"]){
        case "+":
            $calculationOutput=  $_GET["number1"] + $_GET["number2"] ;
            break;
        case "-":
            $calculationOutput= $_GET["number1"] - $_GET["number2"] ;
            break;
        case "*":
            $calculationOutput= $_GET["number1"] * $_GET["number2"] ;
            break;
        case "/":
            $calculationOutput= $_GET["number1"] / $_GET["number2"] ;
            break;
        // default:
        //     echo "Invalid Input<br>";
        //     echo "Please use the following Operators<br>";
        //     echo "+, -, *, /<br> ";
    }
    echo ("<div class=\"calculatorDisplay\" id=\"calculatorOutput\">$calculationOutput</div>");

   
   
    ?>
    </div>
    <script src="script.js"></script>
</body>
</html>