<?php 
try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_SESSION['username']; ?></title>
      <link rel="shortcut icon" type="image/x-icon" href="img/bookicon2.png" />
  
      <link rel="stylesheet" href="css/font-awesome.min.css">

          <link rel="stylesheet" href="css/bootstrap.css">
              <link rel="stylesheet" href="css/style.css">
 

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>



  <nav class="menu">
  <div class="smartphone-menu-trigger"></div>
  <header class="avatar">
    <img src="img/<?php echo $_SESSION['picture']; ?>" class="admin-pic" />
    <h3><?php echo $_SESSION['username']; ?> </h3>
  </header>
  <ul> 

    <a href="index_compt.php"><li><span><i class="fa fa-home" aria-hidden="true"></i> Home</span></li></a>
    <a href="compt_books.php"><li><span><i class="fa fa-book" aria-hidden="true"></i> My Books</span></li></a>
    <a href="settinges.php"><li><span><i class="fa fa-cogs" aria-hidden="true"></i> Settinges</span></li></a>


  </ul>
</nav>
<main>


<?php 


$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=  mysqli_connect($host, $user, $password, $database);


    if(isset($_POST['delete'])) {
    $book_id = $_POST['delete']; // get the variable id
    $stmt = $con->prepare('DELETE FROM basket WHERE id_b= ?');
    $stmt->bind_param('i', $book_id);
    $stmt->execute();}
             $reponse = $bdd->query('SELECT * from basket ');
while($donnees = $reponse->fetch()){


  
echo '<div class="col-xs-6 col-xs-2">
          <div class="thumbnail tbaskt fix">
<form method="POST">
            <img src="img/'. $donnees['pic_b'].'" class="img-bskt">

                  <p class="tbaskt">  '. $donnees['title'].'  </p>
                   <p class="tbaskt vide1"> Price : <span class="tbaskt"> ' .$donnees['prix'].'</span> <small> DA</small> </p>
                       <div class="section">Quantity</div>
        <div class="inner-wrap">
    <select class="tbaskt" name="quant">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
    </div>
                  <p> <button  value="'. $donnees['id_b'] .'" type="submit" name="delete" class="btn btn-danger vide">Delete</button></p>
                  </form>
                </div>
              </div>';
}
?>

</main>
<?php 
$query = "SELECT COUNT(*) AS total, SUM(prix) AS total_money FROM basket "; 
$result = mysqli_query($con,$query); 
    $values = mysqli_fetch_assoc($result); 
  $num_item = $values['total']; 
$total_value = $values['total_money'];

 ?>
<div class="put_right2">
<p class="atrbp">Totale : <small class="atrbmp"><?php echo $total_value  ; ?></small></p>
<a href="buy1.php?price=<?php echo $total_value ; ?>"><button type="button" class="btn btn-warning btn_buy">Buy <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>
</div> 

</body>
<script type="text/javascript" src="js/index.js"></script>
</html>
