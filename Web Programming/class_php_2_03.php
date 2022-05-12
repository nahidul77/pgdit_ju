<?php
  $id=$_POST["id"];
  $name=$_POST["name"];
  $user="root";
  $passw="";
  $db="pgdclass";
  $host="localhost";
  if(!$con=mysqli_connect($host, $user, $passw, $db))
    echo "Sorry, connection not established";

$sql= "update personal set id='$id', name='$name' where id='$id'";
 mysqli_query($con,$sql);

 
 ?>