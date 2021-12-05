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

      
<form action="command.php" method="post" id="regform" role="form">

<div class="col-xs-6 separate">

    <center><img src="img/buy.jpg" class="admin-pic1" /></center>

    
      </div>

      <div class="col-xs-6 separate">

      <div class="section"><span>1</span> CCP Card Number *</div>
        <div class="inner-wrap">
          <input name="cp" id="ccp" placeholder="Your CCP" type="Number" required>
      </div>
      
            <div class="section"><span>2</span> Delivery Aderesse * </div>
        <div class="inner-wrap">
  <textarea name="aderesse" placeholder=" Delivery Aderesse " class="form-control" maxlength="200"></textarea>


    </div>

            <div class="section"><span>3</span> Price </div>
        <div class="inner-wrap">
  <div class="price"><?php echo $_GET['price']  ; ?> </div>


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
