<?php 
             
             $query = "SELECT * FROM book ORDER by id_b DESC LIMit 0,2'";
$paginator = new Paginator( $mysqli, $query ); 
$result = $paginator->getData( $limit, $page );?>
<?php

for ($p = 0; $p < count($result->datas); $p++): ?> 
    
        <?php 
        $donnees = $result->datas[$p]; 
        ?>



<?php //category
$id=$donnees['id_b'];
$reponse = $bdd->query('SELECT * from gategory inner join book_c on book_c.category_code=gategory.id_g  inner join book on book.id_b=book_c.id_book where book.id_b='.$id.'   
      ');
$donnee = $reponse->fetch();?>

   

         <?php  echo '<div class="left1">
              <a href="book_m.php"> <img src="img/'. $donnees['pic_b'].'" class="imag"></a>
             </div>
            <div class="right1">
                        <h3 class="t1">'. $donnees['title'].'</h3>
                  <p class="t">Category : <small> '.$donnee['name_g'].'</small></p>
                  <p class="t">Writer : <small> '. $donnees['writer'].' </small></p>
                   <i class="fa fa-star star" aria-hidden="true"></i><span class="r"> ** </span>

            </div>';?>


<?php endfor; ?>