<?php
include '../model/data.php';

include 'header.php';
if(!isset($_POST['id'])){
  $value = get_img_article();
  include '../vue/index.php';
}
else {
  $donnees = get_article_img_id($_POST['id']);
  include '../vue/reception.php';
}
include 'footer.php';
 ?>
