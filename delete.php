 <?php session_start(); ?>

                              <?php



try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=minprjct;charset=utf8', 'ahmed', 'ahmed95');
  
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

 $id=$_SESSION['id'];
try {
    
    $sql = "DELETE FROM member WHERE $id";

    $bdd->exec($sql);
    
    header("location=manage_member.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$bdd = null;
?> 