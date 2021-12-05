<?php
session_start();
try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
 

  
if (isset($_POST['pass']) && isset($_POST['mail'] )) {
        //if(isset($_POST['pass']) && $_POST['pass'] == 'password'){
         
          $email = $_POST['mail'] ;
          $password = $_POST['pass'];
          

          if ($email == '') {
            header("Location:index.php");   
          }else {
            $pageUser = $bdd->prepare("SELECT * FROM member WHERE email= ?");
            $pageUser->execute(array($email));
           

            if ($pageUser->rowCount() == 0) {
            header("Location:index.php");   
            }else {
              while ($row = $pageUser->fetchObject()) {
                    

                if($password == $row->password)
                {
                  
                    //$donnees = $reponse->fetch()
                    $_SESSION['picture']= $row->pic;
                    $_SESSION['username']=$row->name;
                    $_SESSION['typecompt']=$row->typecompte;
	                  $_SESSION['email_U'] = $email;
	                  $_SESSION['id_user'] = $row->id_m;
                    $_SESSION['romance']=$row->romance;
                    $_SESSION['cs']=$row->computerscience;
                    $_SESSION['co']=$row->coocking;
                    $_SESSION['sp']=$row->sport;
                    $_SESSION['sc']=$row->science;
                    $_SESSION['hi']=$row->history;
                    $_SESSION['fi']=$row->fiction;
                    $_SESSION['mi']=$row->mistrey;
                    $_SESSION['ft']=$row->fairytales;
							      header("Location:admin.php");					

                }else {

                              header("Location:index.php");   

                }
              } 
            }
          }
        }

        ?>