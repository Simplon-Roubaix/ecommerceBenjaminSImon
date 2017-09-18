<?php include("header.php"); ?>

<?php
$reponse = $bdd->prepare('SELECT * from article , image where img_id = id_image and id_article = :indice');
$reponse->execute(array(
  'indice'=>$_POST['indice']
));
$donnees = $reponse->fetch();
 ?>

 <div class="container my-5">
  <div class="row">
   <article class="col-md-3">
    <img class="img img-thumbnail" src="img/<?php echo $donnees["nom"]?>" alt="<?php echo $donnees["alt"]?>">
    <a href="index.php">retour</a>
  </article>
  <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
     <h2><?php echo $donnees["titre"]?></h2>
     <p><?php echo $donnees["descriptiondetail"]?></p>
   </article>
 </div>
</div>

<?php include("footer.php"); ?>
