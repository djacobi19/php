<?php 
include "db.php";
include "functions.php";

if(isset($_POST['Submit'])) {
    
DeleteRows();

}

?>
  


<?php include "includes/header.php"?>



<div class ="container">
<div class="col-sm-6">

<form action="53_login_delete.php" method="post">
   
     <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  
  <div class ="form-group">
   <select name="id" id="">
   

    <?php 
       
      showAllData(); 
       
       ?>

       
    </select>
          

   
    </div>
  
    <input class = "btn btn-primary" type="submit"name ="Submit" value ="DELETE">  
</form>  
</div>   
 
    
<?php include "includes/header.php"?>   

                                                                                                                