<?php

function get_img_article(){
  $bdd = new PDO('mysql:host=localhost;dbname=ecommerceBS;charset=utf8', 'root', 'root');
  $reponse = $bdd->query('SELECT * from image,article where img_id = id_image');
  return $reponse->fetchAll();
};

function get_article_img_id($id){
  $bdd = new PDO('mysql:host=localhost;dbname=ecommerceBS;charset=utf8', 'root', 'root');
  $reponse = $bdd->prepare('SELECT * from article , image where img_id = id_image and id_article = :indice');
  $reponse->execute(array(
    'indice'=>$id
  ));
  return $reponse->fetch();
};

function get_article_id($id){
  $bdd = new PDO('mysql:host=localhost;dbname=ecommerceBS;charset=utf8', 'root', 'root');
  $selectarticle = $bdd->prepare('SELECT * from article where id_article = :indice');
  $selectarticle->execute(array(
    'indice'=>$id
  ));
return $selectarticle->fetch();
};

function update_article($titre,$description,$descriptiondetail,$id){
  $bdd = new PDO('mysql:host=localhost;dbname=ecommerceBS;charset=utf8', 'root', 'root');
  $reponse = $bdd->prepare('UPDATE article set titre = :titre , description = :description , descriptiondetail = :descriptiondetail where id_article=:id');
  $reponse->execute(array(
    'titre'=>$titre,
    'description'=>$description,
    'descriptiondetail'=>$descriptiondetail,
    'id'=>$id
  ));
};

function get_article(){
    $selectarticle = $bdd->query('SELECT * FROM article');
    return $reponse->fetchAll();
};

function get_info(){
  $infosite= $bdd->query('SELECT * from info');
  return $infosite->fetchAll();
};

function add_image(){

};

function add_article($titre,$description,$descriptiondetail){
  $imagelastid = $bdd->query('SELECT max(id_image) as max from image');
  $lastid = $imagelastid->fetch();
  $addarticle = $bdd->prepare('INSERT into article (img_id,titre,description,descriptiondetail) values(:id,:titre,:description,:descriptiondetail)');
  $addarticle->execute(array(
  'id'=>$lastid["max"],
  'titre'=>$titre,
  'description'=>$description,
  'descriptiondetail'=>$descriptiondetail
));
};
 ?>
