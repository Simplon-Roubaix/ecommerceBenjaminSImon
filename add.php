<?php
include 'tableau.php';

if (isset($_FILES['file']) and $_FILES['file']['error'] == 0 and !empty($_POST['titre']) && !empty($_POST['description'])) {
    if ($_FILES['file']['size'] <= 1000000) {
        $uploads_dir = 'img/';
        $nomfichier =$_FILES['file']['name'];
        $infosfichier = pathinfo($_FILES['file']['name']);
        $extension_upload = $infosfichier['extension'];
        $tmp_name = $_FILES["file"]["tmp_name"];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees)) {
            move_uploaded_file($tmp_name,"$uploads_dir/$nomfichier");
            $reponse = $bdd->prepare('INSERT into image (nom,poids,type,alt) values(:nom,:size,:type,:alt)');
            $reponse->execute(array(
            'nom'=>$nomfichier,
            'size'=>$_FILES['file']['size'],
            'type'=>$extension_upload,
            'alt'=>htmlspecialchars($_POST['descriptionimg'])
          ));
            $bonjour = $bdd->query('SELECT max(id_image) as max from image');
            $lastid = $bonjour->fetch();
            $reponse = $bdd->prepare('INSERT into article (img_id,titre,description,descriptiondetail) values(:id,:titre,:description,:descriptiondetail)');
            $reponse->execute(array(
            'id'=>$lastid["max"],
            'titre'=>htmlspecialchars($_POST['titre']),
            'description'=>htmlspecialchars($_POST['description']),
            'descriptiondetail'=>htmlspecialchars($_POST['descriptiondetail'])
          ));
        }
    }
};

header("location:espace.php");
