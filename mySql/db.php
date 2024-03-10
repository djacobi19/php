<?php


$connection = mysqli_connect('localhost', 'root','','loginapp'); // Connection to the database    
echo "<br>";    

if(!$connection)  { die("database connection failed"); } //Tests the database connnection
echo "<br>";  

?>