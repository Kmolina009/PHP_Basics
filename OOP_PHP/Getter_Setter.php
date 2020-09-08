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
// Constructors,FCC video did not work. Looking into other
class Book{

var $title;
var $author;
var $pageNumber;
    // Constructors are functions stored in associative arrays
public function __construct($aTitle,$anAuthor,$pageNumber){
    $this->title = $aTitle;
    $this->author = $anAuthor;
    $this->pageNumber = $pageNumber;
    }
}
//declaring an object, based on Class
$book1 = new Book('Harry Potter','JK Rowling',296);


echo $book1 -> author; // Output: JK Rowling
echo $book1 -> pageNumber; // Output: JK Rowling

$book2 = new Book('The Lord of the Rings: The Fellowship of the Ring','J.R.R Tolkein',506);
$book3 = new Book('The Lion the Witch and the Wardrobe','C.S. Lewis',157);
//Adding values to keya
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
            <td>$book1->pageNumber</td>
        </tr>
        <tr>
            <td>$book2->title</td>
            <td>$book2->author</td>
            <td>$book2->pageNumber</td>
        </tr>
        <tr>
            <td>$book3->title</td>
            <td>$book3->author</td>
            <td>$book3->pageNumber</td>
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
