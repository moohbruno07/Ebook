<?php session_start(); 
$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$con=  mysqli_connect($host, $user, $password, $database);
?>
  <?php
  
                              ?>
                              <?php



try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

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
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

            <link rel="stylesheet" href="css/footer.css">            
    
    <link rel="stylesheet" href="css/style.css">            

    <link rel="stylesheet" href="css/popup.css">  

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          

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
                <a class="navbar-brand" href="index.php">
                    <img src="img/bookicon1.png" class="hidden-xs">
                    <h3 class="visible-xs">Dz Book</h3>
                </a>
            </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




      <ul class="nav navbar-nav navbar-right">
        <li>
                        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>


<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i> Categories </a>
<ul class="dropdown-menu">
          <li>
            <a href="romance1.php">
                <i class="fa fa-heartbeat" aria-hidden="true"></i> <span> Romance</span>
              </a> 
          </li>

          <li>
              <a href="fairytales1.php">
                <i class="fa fa-snapchat-ghost" aria-hidden="true"></i> <span> Fairy Tales</span>
              </a>
          </li>

          <li>
              <a href="mystrey1.php">
                <i class="fa fa-user-secret" aria-hidden="true"></i> <span> Mystery</span>
              </a>
              </li>

              <li>

              <a href="science1.php">
                <i class="fa fa-flask" aria-hidden="true"></i> <span> Science</span>
              </a>
              </li>

              <li>

              <a href="fiction1.php">
                <i class="fa fa-low-vision" aria-hidden="true"></i> <span> Fiction</span>
              </a>
              </li>

              <li>

              <a href="sport1.php">
                <i class="fa fa-futbol-o" aria-hidden="true"></i> <span> Sport</span>
              </a>
              </li>

              <li>

              <a href="computerscience1.php">
                <i class="fa fa-laptop" aria-hidden="true"></i> <span> Computer Science</span>
              </a>
              </li>

              <li>

              <a href="history1.php">
                <i class="fa fa-hourglass-half" aria-hidden="true"></i> <span> History</span>
              </a>
              </li>

              <li>

              <a href="coocking1.php">
                <i class="fa fa-cutlery" aria-hidden="true"></i> <span> Coocking</span>
              </a>
              </li>
          </ul>
        </li>

        <li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i> Search</a></li>

                    
        </li>
                    

                     <li><a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up </a> </li>


 <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user" aria-hidden="true"></i> Login
                </a>
                <ul class="dropdown-menu">
       
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="login.php" method="post" role>
          <div class="form-group has-feedback">
            <input type="email" name="mail" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          

          <button name="submit" type="submit"  class="btn btn-warning btn-block btn-flat" >Sign In</button>

        </form>
       </li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




    
    
  <header>
    <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <img src="img/slider1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>Mystrey</h2>
                            <br>
                            <h3>The Best Way To Find Your Favorite Book.</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="img/slider2.jpg" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>Mystrey</h2>
                            <br>
                            <h3>Find Your Other Half.</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
          </div>
          
      </div>

      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="icon-next"></span>
      </a>
      

    </div><!-- /carousel -->

  </header>



<div class="all">

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Please Login Or Sign Up !!</h4>
      </div>
      <div class="modal-body">

        <div class="all">

          <div class="midd">

<form action="login.php" method="post" id="buyform" role="form">

          <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="login.php" method="post" role>
          <div class="form-group has-feedback">
            <input type="email" name="mail" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          

          <button name="submit" type="submit"  class="btn btn-warning btn-block btn-flat" >Sign In</button>

        </form>
       </div> 
  </div>

          <div class="col-col">
             <img src="img/log.gif" class="image">
          </div>

        </div>
      </div>

      <div class="modal-footer">
        <center><a href="register.php"><button type="button" class="btn btn-warning">Sign Up</button></a></center>
      </div>
    </div>
  </div>
</div>

<div class="midd">
<?php

require ('paginator.php');

$host = 'localhost';
$user = 'ahmed';
$pass = 'ahmed95';
$db = 'minprjct';

$mysqli = new mysqli($host,$user,$pass,$db); 

//DO NOT limit this query with LIMIT keyword, or...things will break!
$query ="SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=3";

//these variables are passed via URL
$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 12; //movies per page
$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
$links = 12;

$paginator = new Paginator( $mysqli, $query ); //__constructor is called
$results = $paginator->getData( $limit, $page );

//print_r($results);die; $results is an object, $result->data is an array

//print_r($results->data);die; //array



?> 

 <?php

for ($p = 0; $p < count($results->data); $p++)
        //store in $movie variable for easier reading
        $donnees = $results->data[$p]; 
        ?>
<?php 


/*try {
 $result="UPDATE book SET basket='1' ";
$stmt = $bdd->prepare($result);
//$stmt->execute();
   echo $stmt->rowCount() . " ";
    }
catch(PDOException $e)
    {
    echo $result . "<br>" . $e->getMessage();
    }
    
                 $bdd = null; */

  



  $reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=3');
while($donnees = $reponse->fetch()){
  $_SESSION['id']=$donnees['id_b'];
  
  $id=$donnees['id_b'];
$query = "SELECT COUNT(*) AS total, SUM(nbr_e) AS total_e FROM evaluation where id_b='$id' "; 
$result = mysqli_query($con,$query); 
    $values = mysqli_fetch_assoc($result); 
  $num_item = $values['total']; 
  $total_value = $values['total_e'];
  if($num_item==0){$num_item=1;}
  $rating=(int)($total_value/$num_item);
  $reponse2 = $bdd->query('SELECT * from evaluation inner join book on evaluation.id_b=book.id_b  where evaluation.id_b='.$id.'   
      ');
$donnees2 = $reponse2->fetch();


           echo '<div class="col-xs-6 col-md-3">
          <div class="thumbnail">
                                     <a href="book.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="book.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r"> '.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Buy <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';
//$donnees['id_b']++;

}?>





</div><!--end midd-->
<div class="col-col">

        <div class="widget">
          <div class="wid-header">
            <h5>Last Books</h5>
          </div>
          <div class="wid-content"> 
    
       
<?php 
             $reponse = $bdd->query('SELECT * from book ORDER by id_b DESC LIMit 0,2');
while($donnees = $reponse->fetch()){
$idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();

  $id=$donnees['id_b'];
$query = "SELECT COUNT(*) AS total, SUM(nbr_e) AS total_e FROM evaluation where id_b='$id' "; 
$result = mysqli_query($con,$query); 
    $values = mysqli_fetch_assoc($result); 
  $num_item = $values['total']; 
  $total_value = $values['total_e'];
  if($num_item==0){$num_item=1;}
  $rating=(int)($total_value/$num_item);
  $reponse2 = $bdd->query('SELECT * from evaluation inner join book on evaluation.id_b=book.id_b  where evaluation.id_b='.$id.'   
      ');
$donnees2 = $reponse2->fetch();

           echo '<div class="left1">
              <a href="book.php?id= '.$donnees['id_b'].'"> <img src="img/'. $donnees['pic_b'].'" class="imag"></a>
             </div>
            <div class="right1">
                        <h3 class="t1">'. $donnees['title'].'</h3>
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r"> '.$rating.' </span>

            </div>';
//$donnees['id_b']++;
}
?>

            
          </div>
</div>



        <div class="widget">
          <div class="wid-header">
            <h5>Top Rating Books</h5>
          </div>
          <div class="wid-content">
          
             <?php 
             $reponse = $bdd->query('SELECT * from book ORDER by id_b DESC LIMit 2,2');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
  $reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();


  $id=$donnees['id_b'];
$query = "SELECT COUNT(*) AS total, SUM(nbr_e) AS total_e FROM evaluation where id_b='$id' "; 
$result = mysqli_query($con,$query); 
    $values = mysqli_fetch_assoc($result); 
  $num_item = $values['total']; 
  $total_value = $values['total_e'];
  if($num_item==0){$num_item=1;}
  $rating=(int)($total_value/$num_item);
  $reponse2 = $bdd->query('SELECT * from evaluation inner join book on evaluation.id_b=book.id_b  where evaluation.id_b='.$id.'   
      ');
$donnees2 = $reponse2->fetch();


   

           echo '<div class="left1">
              <a href="book.php?id= '.$donnees['id_b'].'"> <img src="img/'. $donnees['pic_b'].'" class="imag"></a>
             </div>
            <div class="right1">
                        <h3 class="t1">'. $donnees['title'].'</h3>
                  <p class="t">Category : <small> '.$donnee['name_g'].' </small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r"> '.$rating.' </span>

            </div>';
//$donnees['id_b']++;
}
?>
            
          </div>
    </div>
</div><!--end col col-->



</div><!--end all-->

<center>
 <div class="pagination">
 <?php echo $paginator->createLinks( $links, 'pagination pagination-sm' );?>
</div>
</center>
    
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