        <?php include("header.php"); ?>

        <div class="container">
          <div class="row">

            <?php

      foreach ($tabarticle as $key => $value) {
          ?>
              <form class="row" action="reception.php" method="post">
                <div class="card" style="width: 20rem">
                  <img class="card-img-top" src="img/<?php echo $value['img']; ?>" alt="Card image cap">
                  <div class="card-block">
                    <h4 class="card-title"><?php echo $value['title']; ?></h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    <input type="hidden" value="<?php echo $key; ?>" name="indice" />

                    <input type="submit" class="btn btn-primary"></input>
                  </div>
                </div>
              </form>

      <?php
      }
      ?>
          </div>
        </div>

        <?php include("footer.php"); ?>
