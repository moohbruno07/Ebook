                <?php 
                session_start();
                  $host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=mysqli_connect($host, $user, $password, $database);
 
                   

    $rating=$_POST['rating'];
    $id_m=$_SESSION['id_user'];


                     $id_b=$_POST['id'];
                    
                     
$sql="INSERT INTO evaluation(id_m,id_b,nbr_e)VALUES('$id_m','$id_b','$rating')"; 
if ($con->query($sql) === TRUE) {

  header('location:book_m.php?id='.$id_b.''); 

 }
 else
{ echo "Error: " . $sql . "<br>" . $con->error;}
  

$con->close();
              
?>