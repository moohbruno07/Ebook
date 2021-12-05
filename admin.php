<?php
session_start();
try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
 echo $_SESSION['username'];
 if($_SESSION['username']=="Aymen"){
 	header('location:manage_member.php');

 }
 else header('location:index_compt.php');
 ?>