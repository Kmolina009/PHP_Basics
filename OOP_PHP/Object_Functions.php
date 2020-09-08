<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="/Classes_Objects.php">Classes & Objects</a>
    <a href="/Constructors.php">Constructors</a>
    <a href="/Getter_Setter.php">Getters & Setters</a>
    <a href="/Inheritance.php">Inheritance</a>
    <a href="/Object_Functions.php">Object & Function</a>
</nav>
</body>
<?php
//Object functions, when a function is encapsulated in an Object

class Student{
    var $name;
    var $major;
    var $gpa;

    function __construct($name,$major,$gpa){
        $this->name  = $name;
        $this->major = $major;
        $this->gpa   = $gpa;
    }
    // Function within Object(what is referred to as )
    function hasHoners(){
        if ($this->gpa > 3) {
        return "$student->name has Honer Role";
        }
        return "$student->name does not have Honer Role";
  
    }
}
    $student1 = new Student("Stanley","Computer Science",3.45); 
    $student2 = new Student("Juloa","Graphic Design",3.5); 
    $student3 = new Student("Aquafoma","Pottery",1.5); 
    
    // echo $student1->gpa;
    // echo $student1->name;
    echo $student1->hasHoners();
    echo "\n";
    echo $student2->hasHoners();
    echo "\n";
    echo $student3->hasHoners();
?>
</html>
