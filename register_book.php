<?php session_start(); ?>
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
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
      <link rel="shortcut icon" type="image/x-icon" href="img/bookicon2.png" />
            <link rel="stylesheet" href="css/bootstrap.css"> 

      <link rel="stylesheet" href="css/font-awesome.min.css">

          <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/style.css">

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>
 <nav class="navbar navbar-inverse">
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

  <nav class="menu">
  <div class="smartphone-menu-trigger"></div>
  <header class="avatar">
    <img src="img/<?php echo $_SESSION['picture']; ?>" class="admin-pic" />
    <h3><?php echo $_SESSION['username']; ?> Admin </h3>
  </header>
  <ul> 

    <a href="register_book.php"><li><span><i class="fa fa-address-book" aria-hidden="true"></i> Add Books</span></li></a>
    <a href="manage_member.php"><li><span><i class="fa fa-users" aria-hidden="true"></i> Manage Members</span></li></a>

  </ul>
</nav>
<main>

<div class="container form-style-10">
<center><h1>Add Book</h1></center> 

      
<form action="bookqueries.php" method="post" id="regform" role="form">

<div class="col-xs-6 separate">

    <div class="section"><span>1</span> Title</div>
        <div class="inner-wrap">
    <input  name="title" id="title" placeholder="Book Title" type="text" required>
    </div>

<div class="section"><span>2</span> Categories</div>
        <div class="inner-wrap">
<div class="all">
  <div class="col-sm-6 col-md-4">
                                <label>
                                    <input type="checkbox" value="Romance" name="l[]"> Romance
                                </label>
                           
                                <label>
                                    <input type="checkbox" value="Fairy Tales" name="l[]"> Fairy Tales
                                </label>
                            
                                <label>
                                    <input type="checkbox" value="Mystery" name="l[]"> Mystery
                                </label>
                          
                                
    </div>
      <div class="col-sm-6 col-md-4">                                               
                                <label>
                                    <input type="checkbox" value="Sport" name="l[]"> Sport
                                </label>
                           
                                <label>
                                    <input type="checkbox" value="Science" name="l[]"> Science
                                </label>

                                <label>
                                    <input type="checkbox" value="Fiction" name="l[]"> Fiction
                                </label>
                          
                      </div>
                     <div class="col-sm-6 col-md-4">                   
                                <label>
                                    <input type="checkbox" value="History" name="l[]"> History
                                </label>
              
                                <label>
                                    <input type="checkbox" value="Coocking" name="l[]"> Coocking
                                </label>
                                <label>
                                    <input type="checkbox" value="Computer Science" name ="l[]"> Computer Science
                                </label>
</div>
</div>
      </div>

      <div class="section"><span>3</span> Writer</div>
        <div class="inner-wrap">
          <input name="writer" id="writer" placeholder="Book Writer" type="text" required>
      </div>

      </div>   

      <div class="col-xs-6 separate">

      <div class="section"><span>4</span> Number of Pages</div>
        <div class="inner-wrap">
          <input name="nbr_pg" id="nbr_pg" placeholder="Number of Pages" type="number" required>
      </div>
      

            <div class="section"><span>5</span> Price </div>
        <div class="inner-wrap">
          <input name="price" id="price" placeholder="Price" type="number" required>
      </div>

                <div class="section"><span>6</span>Choose a Picture</div>
        <div class="inner-wrap">
          <input name="pic" type="file" accept="image/*">
      </div>


    <div class="button-section">
    <center><button type="submit" class="btn btn-warning" name="submit" id="Finish"> Finish <span class="glyphicon glyphicon-send"></span></button></center>
    </div>

          </div>

</form>
</div>
</main>

</body>
<script type="text/javascript" src="js/index.js"></script>
</html>
