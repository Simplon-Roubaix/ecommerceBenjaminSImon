        <?php include("header.php"); ?>

        <div class="container">
          <div class="row d-flex justify-content-between">

            <?php
            $reponse = $bdd->query('SELECT * from image,article where img_id = id_image');
            while ($donnees = $reponse->fetch()) {
                      ?>
              <form class="my-2" action="reception.php" method="post">
                <div class="card" style="width: 20rem">
                  <img class="card-img-top" src="img/<?php echo $donnees['nom']; ?>" alt="Card image cap">
                  <div class="card-block">
                    <h4 class="card-title"><?php echo $donnees['titre']; ?></h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    <input type="hidden" value="<?php echo $donnees['id']; ?>" name="indice" />

                    <input type="submit" class="btn btn-primary" value="Voir plus"></input>
                  </div>
                </div>
              </form>

      <?php
                  }
      ?>
          </div>
        </div>

        <?php include("footer.php"); ?>
