<?php
//lectures 47 Read Databases

include "db.php";
 

//    
$query = "SELECT * FROM users";// query to add values to database 


$result = mysqli_query($connection,$query);//creating a variable that uses connection and query for testing the query
$result_1 = mysqli_query($connection,$query);//creating a variable that uses connection and query for testing the query
if(!$result) { die('Query Failed' . mysqli_error()); } //Tests the database query 
if(!$result_1) { die('Query Failed' . mysqli_error()); }
//


    
//echo "<br>";   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Below is bootstrap link for styling. It is a framework with predefined style functions -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- above is bootstrap link for styling. It is a framework with predefined style functions -->
</head>
<body>
<div class ="container">
<div class="col-sm-6">

<?php while($row_1 = mysqli_fetch_row($result_1)) { ?>   
 
<pre> <?php print_r($row_1); ?> </pre>
 <?php } ?>



<?php while($row = mysqli_fetch_assoc($result)) { ?>   
 
<pre> <?php print_r($row); ?> </pre>
 
<?php } ?>
</div>   
    
</div>
 
</body>
</html>
                                                                                                                