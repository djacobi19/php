<?php
include "db.php";
include "functions.php";

//lectures 46 Create Databases
if(isset($_POST['Submit'])) {
//echo "Submit Works!";   
//echo "<br>";

    
CreateRows();    
        
//echo "your username is :" . " " .$username;
//echo "<br>";
//echo "your password is :" . " " .$password;
//echo "<br>";
//
//if($username) {echo "username is set";} else {echo "username is not set";} 
//echo "<br>";
//if($password) {echo "password is set";} else {echo "password is not set";}

}
    
//echo "<br>";   
?>

<?php include "includes/header.php"?>


<div class ="container">
<div class="col-sm-6">

<form action="46_login_create.php" method="post">
   
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
      
<?php include "includes/footer.php"?>    
                                                                                                         