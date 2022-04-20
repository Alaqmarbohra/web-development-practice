<?php
 $server="localhost";
 $password="";
 $username="root";
 $con=mysqli_connect($server,$username,$username);
 if(!$con){
     die("connection is failed");
 }
?>