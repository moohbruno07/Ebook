   <?php

$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$connect=  mysqli_connect($host, $user, $password, $database);
session_start();

                  $id=  $_SESSION['id_user'];
  if (isset($_POST['submit'])) { 
     $username=$_POST['name'];
     $password=$_POST['newpass'];
     $password2=$_POST['newpass2'];
     $pic=$_POST['pic'];

 
  if($password2=$password){
  $sqli ="UPDATE member SET name='$username' ,password='$password',pic='$pic'where id_m=$id ";
  $result=  mysqli_query($connect, $sqli);
if ($result){//($connect->query($sqli) === TRUE) {
$_SESSION['picture']=$pic;
           $_SESSION['username'] = $_POST['name'];
           $_SESSION['typecompt'] =$typecompte;
                      $_SESSION['name'] = $_POST['name']; 
header("location: index_compt.php");}
 else {
    echo "Error updating record: " . $connect->error;
}

$connect->close();
  /*
  $result=  mysqli_query($connect, $sql);

           $_SESSION['picture']=$pic;
           $_SESSION['username'] = $_POST['name'];
           $_SESSION['typecompt'] =$typecompte;
                      $_SESSION['name'] = $_POST['name']; 
          header("location: index_compt.php");
         }
         
else {
       header("location: settinges.php");}*/
     }}

?>