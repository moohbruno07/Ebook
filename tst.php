
<?php 
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


$reponse = $bdd->query('SELECT * from book ORDER by id_b DESC LIMit 0,2');
while($donnees = $reponse->fetch()){





   
         echo $donnees['id_b'];

           echo '<div class="col-xs-6 col-md-3">
       
          <div class="thumbnail">
                                     <a href="book_m.php"> <h3 class="txth3">'. $donnees['title'].'</h3></a>
              <div class="container">
                <div class="row">

            <img src="img/'. $donnees['pic_b'].'" class="image">

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small></small></p>
                  <p class="t">Writer : <small>'. $donnees['writer'].'</small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r"></span>
    <p class="hr">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Buy <small>' .$donnees['prix'].'</small></button>
              <a href="book_m.html" class="btn btn-default" role="button">More >></a>
    </p>
                </div>
              </div>
          </div>
    </div>
  </div>
</div>';
//$donnees['id_b']++;
}
?>

