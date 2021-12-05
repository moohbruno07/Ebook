<?php
$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=  mysqli_connect($host, $user, $password, $database);
ob_start();
try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 
session_start();
?> 


<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dz Book</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/bookicon2.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->

            <link rel="stylesheet" href="css/footer.css">            

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">            

    <link rel="stylesheet" href="css/popup.css">  

    <link rel="stylesheet" href="css/rating.css">            
          

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand" href="index_compt.php">
                    <img src="img/bookicon1.png" class="hidden-xs">
                    <h3 class="visible-xs">Dz Book</h3>
                </a>
            </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




      <ul class="nav navbar-nav navbar-right">
        <li>
                        <a href="index_compt.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>


<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i> Categories </a>
          <ul class="dropdown-menu">
          <li>
            <a href="romance.php">
                <i class="fa fa-heartbeat" aria-hidden="true"></i> <span> Romance</span>
              </a> 
          </li>

          <li>
              <a href="fairytales.php">
                <i class="fa fa-snapchat-ghost" aria-hidden="true"></i> <span> Fairy Tales</span>
              </a>
          </li>

          <li>
              <a href="mystrey.php">
                <i class="fa fa-user-secret" aria-hidden="true"></i> <span> Mystery</span>
              </a>
              </li>

              <li>

              <a href="science.php">
                <i class="fa fa-flask" aria-hidden="true"></i> <span> Science</span>
              </a>
              </li>

              <li>

              <a href="fiction.php">
                <i class="fa fa-low-vision" aria-hidden="true"></i> <span> Fiction</span>
              </a>
              </li>

              <li>

              <a href="sport.php">
                <i class="fa fa-futbol-o" aria-hidden="true"></i> <span> Sport</span>
              </a>
              </li>

              <li>

              <a href="computerscience.php">
                <i class="fa fa-laptop" aria-hidden="true"></i> <span> Computer Science</span>
              </a>
              </li>

              <li>

              <a href="history.php">
                <i class="fa fa-hourglass-half" aria-hidden="true"></i> <span> History</span>
              </a>
              </li>

              <li>

              <a href="coocking.php">
                <i class="fa fa-cutlery" aria-hidden="true"></i> <span> Coocking</span>
              </a>
              </li>
          </ul>
        </li>

        <li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i> Search</a></li>

                    
        <li><a href="compt_books.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Basket</a></li>

              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                  <img src="img/<?php echo $_SESSION['picture']; ?>"  class="user-image img-circle img-fog" alt="User Image">
                                  <span><?php echo $_SESSION['username']; ?></span>

                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                        <div class="box-body">
                  <li class="user-header">
                    <center><img src="img/<?php echo $_SESSION['picture']; ?>" class="img-circle img-t7t"></center>
                    <p>
                      <?php 
                                      echo $_SESSION['username']; ?> -<small> <?php echo $_SESSION['typecompt']; ?></small> 
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="compt_settings.php" class="btn btn-default btn-flat"> Settings</a>
                    </div>
                    <div class="pull-right">
                     <!-- <a href="index.php"  class="btn btn-default btn-flat"> Sign out</a>-->
                     <form action="" method="post" id="regform" role="form">
                      <button type="submit" class="btn btn-warning" name="submit"><a href="logout.php"> Sign out</a> <span class="glyphicon glyphicon-send"></span></button></form>
                    
                    </div>
                  </li>
                  </div>
                </ul>
              </li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="all1">

<div class="gauch">
<?php 
$id=$_GET['id'];
$_SESSION['id_b']=$_GET['id'];
$reponse = $bdd->query('SELECT * from book inner join book_c on book.id_b=book_c.id_book inner join gategory on book_c.category_code=gategory.id_g where book.id_b='.$id.'   
      ');
$donnees = $reponse->fetch();

$query = "SELECT COUNT(*) AS total, SUM(nbr_e) AS total_e FROM evaluation where id_b='$id' "; 
$result = mysqli_query($con,$query); 
    $values = mysqli_fetch_assoc($result); 
  $num_item = $values['total']; 
  $total_value = $values['total_e'];
    if($num_item==0){$num_item=1;}

$rating=(int)($total_value/$num_item);

$reponse2 = $bdd->query('SELECT * from evaluation inner join book on evaluation.id_b=book.id_b  where evaluation.id_b='.$id.'   
      ');
$donnees2 = $reponse2->fetch();?>
              <img src="img/<?php  echo $donnees['pic_b']; ?>" class="pic_b"> 
</div><!--end col col-->

<div class="droit">


                  <h3 class="titre"><?php echo $donnees['title']; ?></h3>
                  <p><i class="fa fa-star starb" aria-hidden="true"></i><span class="rb"><?php  echo $rating; ?> </span></p>
                  <p class="atrb">Category : <small class="atrbm"><?php  echo $donnees['name_g']; ?></small></p>
                  <p class="atrb">Writer : <small class="atrbm"><?php  echo $donnees['writer']; ?></small></p>
                  <p class="atrb">Number of Pages : <small class="atrbm"><?php  echo $donnees['nbr_pg']; ?></small></p>

<div class="atrbr">
<p>Your Rating</p><form action="rate.php" method="post">
    <i class="fa fa-star starb" aria-hidden="true"></i>

<select class="tbaskt" name="rating">
      <option value="2">1</option>
      <option value="4">2</option>
      <option value="6">3</option>
      <option value="8">4</option>
      <option value="10">5</option>
    </select>
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <input class="btn btn-warning" type="submit" value=" Rate It ♥ "></form>
    </div>
<?php    

                    if (isset($_POST['submit1']) ){
    
                     
$sql="INSERT INTO evaluation(id_b,nbr_e)VALUES('$id','$rating')"; 
$con->query($sql) ;

  

 
  }

$con->close();
?>
<div class="put_right">
<p class="atrbp">Price : <small class="atrbmp"><?php  echo $donnees['prix']; ?></small></p>

<a href="buy.php?price=<?php echo $donnees['prix'].'&' ?>id=<?php echo $donnees['pic_b'].'&' ?>name=<?php echo $donnees['title']; ?>">
<button  type="button" class="btn btn-warning btn_buy">Buy <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>

<form method="post">
<button name="submit2" action="" type="submit" class="btn btn-danger btn_buy">Add <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></form>
                <?php 
$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=mysqli_connect($host, $user, $password, $database);
 
                    if (isset($_POST['submit2']) ){

                     
$sql ="INSERT INTO basket (id_b,pic_b,title,prix) VALUES ('".$donnees['id_b']."','".$donnees['pic_b']."','".$donnees['title']."',
'".$donnees['prix']."')";
if ($con->query($sql) === TRUE) {
  header("Refresh:0"); 
 }
 else
{ echo "Error: " . $sql . "<br>" . $con->error;}
  }
$con->close();                          ?>
</div>

</div><!--end midd-->
</div><!--end all-->


<ul class="nav nav-tabs"> 
    <li class="active"><a data-toggle="tab" class="t" href="#Comments"><i class="fa fa-comments" aria-hidden="true"></i> Comments </a></li> 
    <li><a data-toggle="tab" class="t" href="#Reviews"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Reviews </a></li>
  </ul>


  <div class="tab-content">

    <div id="Comments" class="tab-pane fade in active">

  <?php 
$reponse = $bdd->query('SELECT * from comment inner join member on comment.id_m=member.id_m where comment.id_b='.$id.'');
while($donnees = $reponse->fetch()){
           echo '<div class="media">
  <div class="media-left">
    <a href="compt_settings.php">
      <img class="media-object img-circle coment_pic" src="img/'. $donnees['pic'].'">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">'. $donnees['name'].'</h4>
    <p>'. $donnees['text_c'].'</p>
  </div>
</div>';
//$donnees['id_b']++;

}?>

<div class="media">

  <div class="media-left">
    <a href="compt_settings.php">
      <img class="media-object img-circle coment_pic" src="img/<?php echo $_SESSION['picture']; ?>">
    </a>
  </div>

        <div class="media-body">

           <div class="form-style">
                <form action="" method="post">

                  <div class="form-group">
                   <div class="input-group">
                    <textarea name="comment" placeholder=" Add Your Comment ... " class="form-control" maxlength="200"></textarea> 

                    <button action="" type="submit" class="espace put_right1 btn btn-warning" name="submit" id="Finish" value="comment">Add <span class="fa fa-send"></span></button>
                   </div>
                  </div>
                </form>
                <?php 
                  $host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=mysqli_connect($host, $user, $password, $database);
 
                    if (isset($_POST['submit']) ){

                 $cmnt=$_POST['comment'];
                     $id_b=$_SESSION['id_b'];
                    
  $id_m=$_SESSION['id_user'];
                     
$sql="INSERT INTO comment (id_m,id_b,text_c) VALUES ('$id_m','$id_b','$cmnt')";
//$result = mysqli_query($con, $sql);
if ($con->query($sql) === TRUE) {
//if (!$result)
//{header("location: book_m.php"); 
  header("Refresh:0"); 

 }
 else
{ echo "Error: " . $sql . "<br>" . $con->error;}
  }

$con->close();
                /*
                 $cmnt=$_POST['comment'];
                     $id_b=$donnees['id_b'];
                    
  $id_m=$_GET['id'];
  $host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=mysqli_connect($host, $user, $password, $database);
 
                    if (isset($_POST['submit']) ){
                     
$sql="INSERT INTO comment (id_m,id_b,text_c) VALUES ('$id_m','$id_b','$cmnt')";
$result = mysqli_query($con, $sql);
if (!$result)
{
die('Error: ' );
 }
 else
header("location: book_m.php"); 
  }
/*try{
      
  $sqli ="INSERT INTO comment (id_m,id_b,text_c) VALUES ('$id_m','$id_b','$cmnt')";
  
      $bdd->exec($sqli);
         //$last_id = $bdd->lastInsertId();
           


            header("location: book_m.php");
         }
         catch(PDOException $e)
    {
    echo $sqli . "<br>" . $e->getMessage();
    }
*/
       

                    


               /*  ?><?php

mysqli_close($con);*/
?>
           </div>
        </div>

     </div>
</div>
        

        <div id="Reviews" class="tab-pane fade">

  <?php 
$reponse = $bdd->query('SELECT * from review inner join member on review.id_m=member.id_m where review.id_b='.$id.'');
while($donnees = $reponse->fetch()){
           echo '<div class="media">
  <div class="media-left">
    <a href="compt_settings.php">
      <img class="media-object img-circle coment_pic" src="img/'. $donnees['pic'].'">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">'. $donnees['name'].'</h4>
    <p>'. $donnees['text_r'].'</p>
  </div>
</div>';
//$donnees['id_b']++;

}?>

<div class="media">

  <div class="media-left">
    <a href="compt_settings.php">
      <img class="media-object img-circle coment_pic" src="img/<?php echo $_SESSION['picture']; ?>">
    </a>
  </div>

        <div class="media-body">

           <div class="form-style">
                <form action="" method="post">

                  <div class="form-group">
                   <div class="input-group">
                    <textarea name="review" placeholder=" Add Your Review ... " class="form-control" maxlength="200"></textarea> 

                    <button action="" type="submit" class="espace put_right1 btn btn-warning" name="submit" id="Finish" value="comment">Add <span class="fa fa-send"></span></button>
                   </div>
                  </div>
                </form>
                <?php 
                  $host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=mysqli_connect($host, $user, $password, $database);
 
                    if (isset($_POST['submit']) ){

                 $rev=$_POST['review'];
                     $id_b=$_SESSION['id_b'];
                    
  $id_m=$_SESSION['id_user'];
                     
$sql="INSERT INTO comment (id_m,id_b,text_r) VALUES ('$id_m','$id_b','$rev')";
//$result = mysqli_query($con, $sql);
if ($con->query($sql) === TRUE) {
//if (!$result)
//{header("location: book_m.php"); 
  header("Refresh:0"); 

 }
 else
{ echo "Error: " . $sql . "<br>" . $con->error;}
  }

$con->close();
                /*
                 $cmnt=$_POST['comment'];
                     $id_b=$donnees['id_b'];
                    
  $id_m=$_GET['id'];
  $host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=mysqli_connect($host, $user, $password, $database);
 
                    if (isset($_POST['submit']) ){
                     
$sql="INSERT INTO comment (id_m,id_b,text_c) VALUES ('$id_m','$id_b','$cmnt')";
$result = mysqli_query($con, $sql);
if (!$result)
{
die('Error: ' );
 }
 else
header("location: book_m.php"); 
  }
/*try{
      
  $sqli ="INSERT INTO comment (id_m,id_b,text_c) VALUES ('$id_m','$id_b','$cmnt')";
  
      $bdd->exec($sqli);
         //$last_id = $bdd->lastInsertId();
           


            header("location: book_m.php");
         }
         catch(PDOException $e)
    {
    echo $sqli . "<br>" . $e->getMessage();
    }
*/
       

                    


               /*  ?><?php

mysqli_close($con);*/
?>
           </div>
        </div>

     </div>

</div>

  </div>

  <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img class="picfo" src="img/bookicon1.png">
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index_compt.php">Home</a></li>
                        <li><a href="register.php">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sites Like Us</h5>
                    <ul>
                        <li><a href="http://www.ebay.com/rpp/books">Ebay book Store</a></li>
                        <li><a href="https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155">Amazone Books</a></li>
                        <li><a href="http://books.half.ebay.com/">Half.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="http://getbootstrap.com/">BootsTrap.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Contact us</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2017 Copyright To Dz Book Groupe Developeres </p>
        </div>
    </footer>

    <script src="js/jquery-3.1.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>



    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

               <center>   <br><a>
                      <form action="" method="get" role="search">
  <div class="input-group">
      <input name="search_text" id="search_text" type="text" class="form-control" placeholder="Search for ...">
      <span class="input-group-btn">
        <button class="btn btn-warning" type="button"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
      </span>
    </div><!-- /input-group -->
  </form>
 </a>
</center>  

 <div style="overflow-x:auto;">
 <br />
   <div id="result"></div>
    <?php /*<table>
    <tr>
      <th>Title</th>
      <th>Writer</th>
      <th>Categorey</th>
      <th>Nomber Of Pages</th>
      <th>Price</th>

    </tr>

    <tr>
      <td>book 1</td>
      <td>Writer 1</td>
      <td>Categorey 1</td>
      <td>N1</td>
      <td>P1</td>
    </tr>
*/?>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
  </body>
</html>
