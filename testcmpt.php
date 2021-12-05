<?php
session_start();
$type=$_SESSION['typecompt'];
$id=$_GET['id'];
if($type=="writer"){
header('location:book_w?id='.$id.'');}
else header('location:book_m.php?id=$id');

 ?>