<?php include 'header.php' ?>
<h1>Delete / Update article </h1>
<table class="table">
  <tr>
    <th>numero article</th>
    <th>titre</th>
    <th>description</th>
    <th>update</th>
    <th>delete</th>
  </tr>
  <?php
  $reponse = $bdd->query('SELECT * FROM article');
  while ($donnees = $reponse->fetch()){
    ?>
    <tr>
      <td><?php echo $donnees['id_article']; ?></td>
      <td><?php echo $donnees['titre']; ?></td>
      <td><?php echo $donnees['descriptiondetail']; ?></td>
      <td><a href="update.php?id=<?php echo $donnees['id_article'];?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
      <td>
        <form class="" action="deletepost.php" method="post">
          <input type="hidden" name="id" value="<?php echo $donnees['id_article']; ?>">
          <button type="submit" name="button">X</button>
        </form>
      </td>
    </tr>
    <?php
  };
   ?>
</table>

<h2>Ajouter un article</h2>
<form enctype="multipart/form-data" method="post" action="formenvoie.php">
  <div class="form-group">
    <label for="exampleInputEmail1">titre</label>
    <input type="titre" class="form-control" name="titre" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="titre">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">description</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleTextare">description image</label>
    <textarea class="form-control" id="exampleTextare" rows="3" name="descriptionimg"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" name="file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  <input type="submit" class="btn btn-primary">
</form>



<?php include 'footer.php' ?>
