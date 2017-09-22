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
  foreach ($value as $donnees) {
      ?>
    <tr>
      <td><?php echo $donnees['id_article']; ?></td>
      <td><?php echo $donnees['titre']; ?></td>
      <td><?php echo $donnees['descriptiondetail']; ?></td>
      <td><a href="../controle/espace.php?updateid=<?php echo $donnees['id_article']; ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
      <td>
      <a href="../controle/espace.php?deleteid=<?php echo $donnees['id_article']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
      </td>
    </tr>
    <?php
  };
   ?>
</table>

<h2>Ajouter un article</h2>
<form enctype="multipart/form-data" method="post" action="../controle/espace.php">
  <div class="form-group">
    <label for="exampleInputEmail1">titre</label>
    <input type="titre" class="form-control" name="titre" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="titre" required>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">description</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleTextare">description detail</label>
    <textarea class="form-control" id="exampleTextare" rows="3" name="descriptiondetail" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleTextare">description image</label>
    <textarea class="form-control" id="exampleTextare" rows="3" name="descriptionimg" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" name="file" id="exampleInputFile" aria-describedby="fileHelp" required>
  </div>
  <input type="submit" class="btn btn-primary">
</form>
