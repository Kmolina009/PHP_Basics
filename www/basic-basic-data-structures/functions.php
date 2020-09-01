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
    <a href="/functions.php">Functions</a>
    <a href="/returnStatements.php">returnStatements</a>
</nav>
 <!-- Special container that preforms a specual task, allowing for the use of reusable compoents -->
    <?php
    //same syntax as ES5 Javascript
        function sayHi($name){
            echo "Hello $name <br>";
        }
        //function call
        sayHi("Keven");

        function pokemon($pokemonName,$level){
            echo "$pokemonName is level $level <br>";
        }
        pokemon("Pikachu","52");
    ?>
</body>
</html>