<?php
include '../model/data.php';

include 'header.php';
if(!isset($_GET['updateid']))
{
if(isset($_GET['deleteid'])){
delete_article($_GET['deleteid']);
}
if(isset($_POST['titre']) and isset($_POST['description']) and isset($_POST['descriptiondetail']) and isset($_POST['descriptionimg']) and isset($_FILES['file'])){
  add_article($_POST['titre'],$_POST['description'],$_POST['descriptiondetail']);
  add_image($_FILES['file'],$_POST['descriptionimg']);
}
if(isset($_POST['idupdate'])){
update_article($_POST['titre'], $_POST['description'], $_POST['descriptiondetail'], $_POST['idupdate']);
}
$value = get_article();
include '../vue/espace.php';
}
else{
$donnees = get_article_id($_GET['updateid']);
include '../vue/update.php';
}
include 'footer.php';
 ?>
