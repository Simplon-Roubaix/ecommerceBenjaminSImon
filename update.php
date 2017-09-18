<?php include("header.php");

$reponse = $bdd->prepare('SELECT * from article where id_article = :indice');
$reponse->execute(array(
  'indice'=>$_GET['id']
));
$donnees = $reponse->fetch();
 ?>
 <form method="post" action="updatepost.php">
   <div class="form-group">
     <label for="exampleInputEmail1">titre</label>
     <input type="text" class="form-control" name="titre" aria-describedby="emailHelp" value="<?php echo $donnees['titre'];?>">
   </div>
   <div class="form-group">
     <label for="exampleTextarea">description</label>
     <textarea class="form-control" id="exampleTextarea" rows="3" name="description">
       <?php echo $donnees['description'] ?>
     </textarea>
   </div>
   <div class="form-group">
     <label for="exampleTextare">description detail</label>
     <textarea class="form-control" id="exampleTextare" rows="3" name="descriptiondetail">
       <?php echo $donnees['descriptiondetail'] ?>
     </textarea>
   </div>
   <div class="form-group">
     <input type="hidden" name="id" value="<?php echo $donnees['id_article']?>">
   </div>
   <input type="submit" class="btn btn-primary">
 </form>
 <?php include("footer.php"); ?>
