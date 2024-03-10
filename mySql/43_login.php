<?php
//lectures 43,44,45 


if(isset($_POST['Submit'])) {
echo "Submit Works!";   


$username = $_POST['username'];
$password = $_POST['password'];
 
 
$connection = mysqli_connect('localhost', 'root', '','loginapp');    
echo "<br>";    

if($connection) { echo "connected to database loginapp";} else { die("database connection failed"); }
echo "<br>";    
 
    
echo "your username is :" . " " .$username;
echo "<br>";
echo "your password is :" . " " .$password;
echo "<br>";

if($username) {echo "username is set";} else {echo "username is not set";}
echo "<br>";
if($password) {echo "password is set";} else {echo "password is not set";}

}
    
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

<form action="43_login.php" method="post">
   
     <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  
    <input class = "btn btn-primary" type="submit"name ="Submit" value ="Submit">  
</form>  

    
</div>   
    
</div>
 
</body>
</html>
                                                                                                                