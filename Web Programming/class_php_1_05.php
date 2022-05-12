<?php
if(isset($_POST['submit'])) {
  $id=$_POST["id"];
  $name=$_POST["name"];
  
  $user="root";
  $passw="";
  $db="pgdclass";
  $host="localhost";
  if(!$con=mysqli_connect($host, $user, $passw, $db))
    echo "Sorry, connection not established";
  $sql="insert into personal values( '$id', '$name')";
  echo $sql;
  mysqli_query($con,$sql);
}
?>

<form method=post action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <p>Id: <input type=text name=id>
   <p>Name: <input type=text name=name>
   <p><input type=submit name=submit value="Save">
   
</form>
