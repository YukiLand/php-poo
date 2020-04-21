<?php
    include 'DBConnection.php';
    function readGames($id) {
      $conn = getConnection();
      $requete = "SELECT * FROM boardgames where id = '$id' ";
      $statement = $con->query($requete);
      $row = $statement->fetchAll();
   } 
    
    $game = readGames('1');
    echo $game['name'];
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>

  </body>
</html>
