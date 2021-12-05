<?php
//fetch.php
$host="127.0.0.1";
$user="ahmed";
$password="ahmed95";
$database="minprjct";
$connect=  mysqli_connect($host, $user, $password, $database);$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM book 
  WHERE title LIKE '%".$search."%'
   
  
 ";
}
else
{
 $query = "
  SELECT * FROM book ORDER BY id_b
 ";
}
$result = mysqli_query($connect, $query);
if($result){
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Title</th>
     <th>Writer</th>
     <th>Nomber Of Pages</th>
     <th>Price </th>

     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a href="book.php?id= '.$row['id_b'].'">'.$row["title"].'</a></td>
    <td><a href="book.php?id= '.$row['id_b'].'">'.$row["writer"].'</a></td>
    <td><a href="book.php?id= '.$row['id_b'].'">'.$row["nbr_pg"].'</a></td>
    <td><a href="book.php?id= '.$row['id_b'].'">'.$row["prix"].'</a></td>

    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>