<?php
    include "test.php";
    if($_POST)
    {
       
        $errors = array();


        if(empty($_POST['fname']))
        {
            $errors['fname1'] = "Your  name cannot be empty";
        }
        if(strlen($_POST['fname']) < 2)
        {
            $errors['fname2'] = "Your  name must be atleast 2 characters long";
        }


        if(empty($_POST['femail']))
        {
            $errors['email1'] = "Email cannot be empty";
        }

         if(empty($_POST['fwriter']))
        {
            $errors['fwriter1'] = " cannot be empty";
        }
       


        if(empty($_POST['fpic']))
        {
            $errors['fpic1'] = " cannot be empty";
        }
        

         if(empty($_POST['fpassw']))
        {
            $errors['password3'] = "Password cannot be empty";
        }
        if(strlen($_POST['fpassw']) < 6)
        {
            $errors['password4'] = "Password must be atlest 8 characters long";
        }

         if(empty($_POST['fpass']))
        {
            $errors['password1'] = "Password cannot be empty";
        }
        if(strlen($_POST['fpass']) < 6)
        {
            $errors['password2'] = "Password must be atlest 8 characters long";
        }



        if($_POST['fpassw']==$_POST['fpass'])
        {
        if(count($errors) == 0)
        {

            header("Location: test.php");
            exit();
        }

        
    
    }}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dz Book | Registration Page</title>
            <link rel="shortcut icon" type="image/x-icon" href="img/bookicon2.png" />

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
                <link rel="stylesheet" href="css/footer.css">            
    <link rel="stylesheet" href="css/style.css">



  </head>

  <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="index.php">
                    <img src="img/bookicon1.png" class="hidden-xs">
                    <h3 class="visible-xs">Dz Book</h3>
                </a>
            </div>


    
  </div><!-- /.container-fluid -->
</nav>


<div class="container form-style-10">
<h1>Sign Up Now!<span>Sign up and tell us what you think of the site!</span></h1>

<form action="" method="post" id="regform" role="form">

   <div class="col-xs-6 separate">

    <div class="section"><span>1</span> Full Name</div>
        <div class="inner-wrap">
    <input  name="fname" id="regname" placeholder="Full Name" type="text" required>
    </div>

    

        <div class="section"><span>3</span>Passwords</div>
        <div class="inner-wrap">
        <input name="fpass" id="fpass" placeholder="Password" type="password" required>
        <input name="fpassw" id="fpass" placeholder="Retyping Password" type="password" required>
    </div>
    
         <div class="section"><span>5</span>Favorite Categories</div>
        <div class="inner-wrap">
<div class="all">
  <div class="col-sm-6 col-md-4">
                                <label>
                                    <input type="checkbox" value="romance" name="l[]"> Romance
                                </label>
                           
                                <label>
                                    <input type="checkbox" value="fairyTales" name="l[]"> Fairy Tales
                                </label>
                            
                                <label>
                                    <input type="checkbox" value="mystrey" name="l[]"> Mystrey
                                </label>
                          
                                
    </div>
      <div class="col-sm-6 col-md-4">                                               
                                <label>
                                    <input type="checkbox" value="sport" name="l[]"> Sport
                                </label>
                           
                                <label>
                                    <input type="checkbox" value="science" name="l[]"> Science
                                </label>

                                <label>
                                    <input type="checkbox" value="fiction" name="l[]"> Fiction
                                </label>
                          
                      </div>
                     <div class="col-sm-6 col-md-4">                   
                                <label>
                                    <input type="checkbox" value="history" name="l[]"> History
                                </label>
              
                                <label>
                                    <input type="checkbox" value="coocking" name="l[]"> Coocking
                                </label>
                                <label>
                                    <input type="checkbox" value="computerscience" name ="l[]"> Computer Science
                                </label>
</div>
</div>
      </div>


     
      
</div>

      <div class="col-xs-6 separate">

      <div class="section"><span>2</span>Email</div>
    <div class="inner-wrap">
      <input name="femail" id="femail" placeholder="E-Mail" type="email" maxlength="70" required>
    </div>


    <div class="section"><span>4</span>Favorite Writer</div>
        <div class="inner-wrap">
          <input name="fwriter" id="fwriter" placeholder="Favorite Writer" type="text" required>
      </div>


    <div class="section"><span>6</span>Type Of Account</div>
        <div class="inner-wrap">
            <select name="typecompte" id="typecompte">
      <option value="member">Member</option>
      <option value="writer">Writer</option>
      <option value="Commrce">Company</option>
    </select>

      </div>

        <div class="section"><span>7</span>Choose a Picture</div>
        <div class="inner-wrap">
          <input name="fpic" type="file" accept="image/*">
      </div> 

      </div>
<center>
    <div class="button-section">
    <center><button type="submit" class="btn btn-warning" name="submit" id="Finish"> Finish <span class="glyphicon glyphicon-send"></span></button></center>
    </div>
</center>
    </div>
</form>
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
                        <li><a href="index.php">Home</a></li>
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

  </body>
</html>
