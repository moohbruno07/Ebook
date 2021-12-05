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
    <title><?php echo $_SESSION['username']; ?></title>
      <link rel="shortcut icon" type="image/x-icon" href="img/bookicon2.png" />
            <link rel="stylesheet" href="css/bootstrap.css"> 

      <link rel="stylesheet" href="css/font-awesome.min.css">

          <link rel="stylesheet" href="css/footer.css">

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

<div class="container form-style-10">
<center><h1><?php echo $_SESSION['username']; ?></h1></center> 

      
<form action="test1.php" method="post" id="regform" role="form">

<div class="col-xs-6 separate">

    <center><img src="img/<?php echo $_SESSION['picture']; ?>" class="img-circle admin-pic1" /></center>

    
      </div>

     

      <div class="col-xs-6 separate">

      <div class="section"><span>1</span> Change Name</div>
        <div class="inner-wrap">
          <input name="name" id="name" placeholder="Your Name" type="text" required>
      </div>
      

            <div class="section"><span>2</span> Change Password </div>
        <div class="inner-wrap">
        <input name="newpass"  placeholder="New Password" type="password" required>
        <input name="newpass2"  placeholder="Retyping New Password" type="password" required>
        <input name="lastpass"  placeholder="Current Password" type="password" required>


    </div>

                <div class="section"><span>3</span>Change Picture</div>
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
