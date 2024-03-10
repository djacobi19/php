
<?php 

include "db.php";

function showAllData() {

global $connection;

$query = " SELECT * FROM users" ; // query to add values to database 
$result = mysqli_query($connection , $query);//creating a variable that uses connection and query for testing the query

if(!$result) { die('Query Failed' . mysqli_error()); } //Tests the database query 


while($row = mysqli_fetch_assoc($result)) {
$id =$row['id']; echo "<option value='$id'>$id</option>"; }

}
?>





<?php
function UpdateTable() {
global $connection;   

    
$username = $_POST['username'];
$password = $_POST['password'];
$id       = $_POST['id'];   

$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id  ";

$result = mysqli_query($connection, $query);
    
if(!$result) {
    die("Query Failed" . mysqli_error($connection));
}

}
?>



<?php
function DeleteRows() {
global $connection;   

    
$username = $_POST['username'];
$password = $_POST['password'];
$id       = $_POST['id'];   

$query = "DELETE from users ";
$query .= "WHERE id = $id  ";

$result = mysqli_query($connection, $query);
    
if(!$result) {
    die("Query Failed" . mysqli_error($connection));
}
    


}

?>


<?php 
function CreateRows() {
global $connection;  

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
    
$password = crypt($password,$hashF_and_salt);

$query = "INSERT INTO users(username,password)";// query to add values to database 
$query.= "VALUES ('$username','$password')";// query to add values to database

$result = mysqli_query($connection,$query);//creating a variable that uses connection and query for testing the query

if(!$result) { die('Query Failed' . mysqli_error()); } //Tests the database query 

}
?>




<?php
function Read() {
global $connection;  

$query = "SELECT * FROM users";// query to add values to database 


$result = mysqli_query($connection,$query);//creating a variable that uses connection and query for testing the query
$result_1 = mysqli_query($connection,$query);//creating a variable that uses connection and query for testing the query
if(!$result) { die('Query Failed' . mysqli_error()); } //Tests the database query 
if(!$result_1) { die('Query Failed' . mysqli_error()); }

?>    


    
<?php  while($row_1 = mysqli_fetch_row($result_1))   { ?>   

<pre><?php  print_r($row_1); ?> </pre>

<?php } ?>

 

<?php while($row = mysqli_fetch_assoc($result)) { ?>   
 
 <pre> <?php print_r($row);?> </pre>
 
<?php } ?>
    
<?php } ?>

