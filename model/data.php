<?php
$bdd = new PDO('mysql:host=localhost;dbname=ecommerceBS;charset=utf8', 'root', 'root');
function get_img_article()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from article INNER JOIN image ON img_id = id_image');
    return $reponse->fetchAll();
};

function get_article_img_id($id)
{
    global $bdd;
    $reponse = $bdd->prepare('SELECT * from article INNER JOIN image ON img_id = id_image AND id_article = :indice');
    $reponse->execute(array(
    'indice'=>$id
  ));
    return $reponse->fetch();
};

function get_article_id($id)
{
    global $bdd;

    $selectarticle = $bdd->prepare('SELECT * from article where id_article = :indice');
    $selectarticle->execute(array(
    'indice'=>$id
  ));
    return $selectarticle->fetch();
};

function update_article($titre, $description, $descriptiondetail, $id)
{
    global $bdd;

    $reponse = $bdd->prepare('UPDATE article set titre = :titre , description = :description , descriptiondetail = :descriptiondetail where id_article=:id');
    $reponse->execute(array(
    'titre'=>htmlspecialchars($titre),
    'description'=>htmlspecialchars($description),
    'descriptiondetail'=>htmlspecialchars($descriptiondetail),
    'id'=>$id
  ));
};

function get_article()
{
    global $bdd;

    $selectarticle = $bdd->query('SELECT * FROM article');
    return $selectarticle->fetchAll();
};

function get_info()
{
    global $bdd;
    $infosite= $bdd->query('SELECT * from info');
    return $infosite->fetch();
};

function add_image($nomfichier, $size, $extension, $alt)
{
    global $bdd;
    $addimage = $bdd->prepare('INSERT into image (nom,poids,type,alt) values(:nom,:size,:type,:alt)');
    $addimage->execute(array(
  'nom'=>$nomfichier,
  'size'=>$size,
  'type'=>$extension,
  'alt'=>htmlspecialchars($alt)
));
};

function add_article($titre, $description, $descriptiondetail)
{
    global $bdd;

    $imagelastid = $bdd->query('SELECT max(id_image) as max from image');
    $lastid = $imagelastid->fetch();
    $addarticle = $bdd->prepare('INSERT into article (img_id,titre,description,descriptiondetail) values(:id,:titre,:description,:descriptiondetail)');
    $addarticle->execute(array(
  'id'=>$lastid["max"],
  'titre'=>htmlspecialchars($titre),
  'description'=>htmlspecialchars($description),
  'descriptiondetail'=>htmlspecialchars($descriptiondetail)
));
};

function delete_article($id)
{
    global $bdd;
    $reponse = $bdd->prepare('DELETE from article where id_article = :indice');
    $reponse->execute(array(
    'indice'=>$id
  ));
};
