<?php include 'tableau.php';

if(isset($_POST['id'])){
  $reponse = $bdd->prepare('DELETE from article where id_article = :indice');
  $reponse->execute(array(
    'indice'=>$_POST['id']
  ));
};

header("location:espace.php");
