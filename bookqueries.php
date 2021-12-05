<?php
/*$host="127.0.0.1";
$user="aymen";
$password="moohbruno";
$database="minprjct";
$connect=  mysqli_connect($host, $user, $password, $database);*/
try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>
<?php  session_start();
if (isset($_POST['submit'])) { 
  //$category=$_POST['category'];
  $writer=$_POST['writer'];
  $title=$_POST['title'];
  $nbr_pg=$_POST['nbr_pg'];
  $pic_b=$_POST['pic'];
    $price=$_POST['price'];
$l1=$_POST['l'];
 
  $fields="";
  $values="";
try{
      
  $sqli ="INSERT INTO book (title,writer,nbr_pg,prix,pic_b) VALUES ('$title','$writer','$nbr_pg','$price','$pic_b')";
  
      $result= $bdd->exec($sqli);
         $last_id = $bdd->lastInsertId();
           //$_SESSION['picture']=$pic_b;
           $_SESSION['title'] = $_POST['title'];
           $_SESSION['writer'] =$writer;
           $_SESSION['nbr_pg'] =$nbr_pg;
           $_SESSION['price'] =$price;

            header("location: index_compt.php");
         }
         catch(PDOException $e)
    {
    echo $sqli . "<br>" . $e->getMessage();
    }

       }

         foreach ($l1 as $cat) {
    $fields.=$cat;
    $category="";

      
    $sql2 = $bdd->prepare("SELECT * FROM gategory");
            $sql2->execute(array($category));
    

    while ($row = $sql2->fetchObject()){

   if($cat==$row->name_g){
    try{

    $sql3="INSERT INTO book_c (category_code,id_book) VALUES ('$row->id_g','$last_id')";
     $bdd->exec($sql3);}catch(PDOException $e)
    {
    echo $sql3 . "<br>" . $e->getMessage();
    }
    }
    }


    $values.=",1";
      }
?>

<?php
$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=  mysqli_connect($host, $user, $password, $database);
$sql='SELECT * FROM book where title=$title ';
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
  $_SESSION['id'] =$row['id_b'];
?>