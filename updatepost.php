<?php include 'tableau.php';
if(isset($_POST['titre']) && isset($_POST['description']))
{
  $reponse = $bdd->prepare('UPDATE article set titre = :titre , description = :description , descriptiondetail = :descriptiondetail where id_article=:id');
  $reponse->execute(array(
    'titre'=>$_POST['titre'],
    'description'=>$_POST['description'],
    'descriptiondetail'=>$_POST['descriptiondetail'],
    'id'=>$_POST['id']
  ));
  header('location:espace.php');
};
