<?php 


try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
if($rom==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=1 ');
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
 
           echo '<div class="col-xs-6 col-md-3">
          <div class="thumbnail">
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
if($cs==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=7   ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}

if($co==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=9   ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
 if($sc==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=4   ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
if($hi==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=8   ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
if($fi==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=5   ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
if($ft==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=2   ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
if($sp==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=6  ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
if($mi==1){ 
$reponse = $bdd->query('SELECT * from book_c inner join book on book_c.id_book=book.id_b where book_c.category_code=3   ');
while($donnees = $reponse->fetch()){
  $idb=$donnees['id_b'];
$reponses = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$idb.'   
      ');
$donnee = $reponses->fetch();$id=$donnees['id_b'];
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
                                     <a href="testcmpt.php?id= '.$donnees['id_b'].'"> <h3 class="txth3"> '. $donnees['title'].' </h3></a>
              <div class="container">
                <div class="row">

            <a href="testcmpt.php?id= '.$donnees['id_b'].'" class="image"><img src="img/'. $donnees['pic_b'].'" class="pic"></a>

              <div class="overlay">
                <div class="text">
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r">'.$rating.'</span>
<p class="hr">
              <button type="button" class="btn btn-warning">Price <small>' .$donnees['prix'].' DA</small></button>
    </p>
                       </div>
              </div>
          </div>
    </div>
  </div>
</div>';

}}
?>