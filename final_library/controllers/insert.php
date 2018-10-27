<?php
//Establishing connection with the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'library'); //where books is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 
?>
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>ISM LIBRARY</h2></center>
<link rel="icon" href="./assets/favicon.ico">
<br>
 
<?php 
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
$shelf=$_POST["shelf"];
$floor = $_POST["floor"]; 
$query = "insert into books(isbn,bookname,author,edition,publication,floor,shelf) values('$isbn','$title','$author','$edition','$publication','$floor','$shelf')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
?>
 
<h3> Book information is inserted successfully </h3>
 
<a href="../insertbooks.php"> Insert More </a>
<a href="../index.php"> Search Instead </a>
 
</body>
</html>