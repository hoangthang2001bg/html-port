<?php
$server="localhost";
$username="root";
$password="";
$database="woodshop";
$conn=mysqli_connect($server,$username,$password,$database);
mysqli_query($conn,'set names"utf8"');
?>