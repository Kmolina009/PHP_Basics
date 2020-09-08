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
    <a href="/Object_Function.php">Object & Function</a>
</nav>
</body>
<?php
// representations of real world objects
// A class is a representation of a custome data type(made out of the base/given data types)
//constructed out of certain specifications

class Book{
var $title;
var $author;
var $pageNumber;
};
//declaring an object, based on Class
$book1 = new Book;
//Adding values to keya
$book1 -> title ='Harry Potter';
$book1 -> author ='JK Rowling';
$book1 -> pages =296;

print $book1 -> author; // Output: JK Rowling

$book2 = new Book;
//Adding values to keya
$book2 -> title ='The Lord of the Rings: The Fellowship of the Ring';
$book2 -> author ='J.R.R Tolkein';
$book2 -> pages =506;

$book3 = new Book;
//Adding values to keya
$book3 -> title ='The Lion the Witch and the Wardrobe';
$book3 -> author ='C.S. Lewis';
$book3 -> pages =157;
echo(
    "
    <table>
        <tr>
            <th>Book Title</th>
            <th>Author</th>
            <th>Page Number</th>
        </tr>
        <tr>
            <td>$book1->title</td>
            <td>$book1->author</td>
            <td>$book1->pages</td>
        </tr>
        <tr>
            <td>$book2->title</td>
            <td>$book2->author</td>
            <td>$book2->pages</td>
        </tr>
        <tr>
            <td>$book3->title</td>
            <td>$book3->author</td>
            <td>$book3->pages</td>
        </tr>
    </table>
    <style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
    }
    </style>
    "

)
?>
</html>

<!-- to run server use php -S localhost:4000 -->
<!--localhost:4000/Classes_Objects.php -->