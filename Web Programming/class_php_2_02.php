<?php
  $id=$_POST["id"];
 
  $user="root";
  $passw="";
  $db="pgdclass";
  $host="localhost";
  if(!$con=mysqli_connect($host, $user, $passw, $db))
    echo "Sorry, connection not established";
 $sql= "select id, name from personal where id='$id'";
 $res=mysqli_query($con,$sql);
 while($row=mysqli_fetch_assoc($res)){
	  $id=$row['id'];
	  $name=$row['name'];
 }
?>
 <form method=post action="class_php_2_03.php">
   <p> Id: <input type=text name=id value= <?php echo $id ?>>
   <p>Name: <input type=text name=name value= '<?php echo $name ?>'>
   <p><input type=submit value="Update">
   
</form>
 
 
