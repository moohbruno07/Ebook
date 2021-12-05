<?php
$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$connect=  mysqli_connect($host, $user, $password, $database);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  session_start();
if (isset($_POST['submit'])) { 
 $usename=$_POST['fname'];
   $password=$_POST['fpass'];

//if($_POST['fpass']==$_POST['fpassw']){ $password=$_POST['fpass']; }else header("location: register1.php");
  $email=$_POST['femail'];
  $fav_writer=$_POST['fwriter'];
  $pic=$_POST['fpic'];
  $typecompte=$_POST['typecompte'];
  /*$romance=$_POST['romance'];
  $fiction=$_POST['fiction'];
  $fairytales=$_POST['fairytales'];
  $sport=$_POST['sport'];
  $science=$_POST['science'];
  $computerscience=$_POST['computerscience'];
  $history=$_POST['history'];
  $coocking=$_POST['coocking'];
  $mystrey=$_POST['mystrey'];*/
  $l1=$_POST['l'];
  //print_r($l1);
  $fields="";
  $values="";
  foreach ($l1 as $language) {
    $fields.=",".$language;
    $values.=",1";
      }
       //$fields=rtrim($fields.",");
      /*<?php      $sql = "SELECT image FROM test_image WHERE id=" .$_GET['id'] . ";";
                  $result = mysql_query("$sql") or die("Invalid query: " . mysql_error()); header("Content-type: image/jpeg");
 ?>
session unset
session destroy
 */
  //echo "INSERT INTO member (name,password,email,fav_writer,pic".$fields."),('$usename','$password','$email','$fav_writer','$pic'".$values.")";
 //$usename = mysqli_real_escape_string($connect, $_REQUEST['fname']);
  if($_POST['fpass']==$_POST['fpassw']){
  $sql = "INSERT INTO member (name,password,email,fav_writer,typecompte,pic".$fields.") VALUES ('$usename','$password','$email','$fav_writer',
  '$typecompte','$pic'".$values.")";
        $result=  mysqli_query($connect, $sql);
        if(!$result){
          echo "404 error ";
         }    
         else {
           $_SESSION['picture']=$pic;
           $_SESSION['username'] = $_POST['fname'];
           $_SESSION['typecompt'] =$typecompte;
          header("location: index_compt.php");
         }
             
           $_SESSION['fname'] = $_POST['fname']; 
        } 
        else header("location: register1.php");}
?>
</body>
</html>
<?php

mysqli_close($connect);
?>