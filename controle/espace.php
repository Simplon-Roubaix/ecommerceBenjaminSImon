<?php
include '../model/data.php';

include 'header.php';
if(!isset($_GET['updateid']))
{
if(isset($_GET['deleteid'])){
delete_article($_GET['deleteid']);
}
if(isset($_POST['titre']) and isset($_POST['description']) and isset($_POST['descriptiondetail']) and isset($_POST['descriptionimg']) and isset($_FILES['file'])){
  if (isset($_FILES['file']) and $_FILES['file']['error'] == 0 and !empty($_POST['titre']) && !empty($_POST['description'])) {
      if ($_FILES['file']['size'] <= 1000000) {
          $uploads_dir = '../img/';
          $nomfichier =$_FILES['file']['name'];
          $infosfichier = pathinfo($_FILES['file']['name']);
          $extension_upload = $infosfichier['extension'];
          $tmp_name = $_FILES["file"]["tmp_name"];
          $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
          if (in_array($extension_upload, $extensions_autorisees)) {
              move_uploaded_file($tmp_name,"$uploads_dir/$nomfichier");
              add_image($nomfichier,$_FILES['file']['size'],$extension_upload,$_POST['descriptionimg']);
              add_article($_POST['titre'],$_POST['description'],$_POST['descriptiondetail']);
}
}
};
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
