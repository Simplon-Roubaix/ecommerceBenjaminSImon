<div class="container">
  <div class="row d-flex justify-content-between">

    <?php
    foreach($value as $donnees) {
              ?>
      <form class="my-2" action="../controle/index.php" method="post">
        <div class="card" style="width: 20rem">
          <img class="card-img-top" src="../img/<?php echo $donnees['nom']; ?>" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title"><?php echo $donnees['titre']; ?></h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <input type="hidden" value="<?php echo $donnees['id_article']; ?>" name="id" />

            <input type="submit" class="btn btn-primary" value="Voir plus"></input>
          </div>
        </div>
      </form>

<?php
          }
?>
  </div>
</div>
