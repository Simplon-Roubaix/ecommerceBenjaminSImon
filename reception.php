<?php include("header.php"); ?>

<?php
$indice = $_POST['indice'];
$info = $tabarticle[$indice];
 ?>

 <div class="container my-5">
  <div class="row">
   <article class="col-md-3">
    <img class="img img-thumbnail" src="img/<?php echo $info["img"]?>" alt="<?php echo $info["title"]?>">
    <a href="index.php">retour</a>
  </article>
  <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
     <h2><?php echo $info["title"]?></h2>
     <p><?php echo $info["para1"]?></p>
     <br>
     <p><?php echo $info["para2"]?></p>
   </article>
 </div>
</div>

<?php include("footer.php"); ?>
