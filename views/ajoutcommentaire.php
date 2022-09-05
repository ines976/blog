<?php

include_once '../core/CommentaireC.php';
include_once '../entities/Commentaire.php' ;
 
echo 'ze';
if (isset($_POST['user'], $_POST['id_post'], $_POST['text']))
{


    $commentaire = new Commentaire($_POST['id_post'],$_POST['text'],$_POST['user']);
    $commentaireC = new commentaireC();
    var_dump($commentaire);
    $commentaireC->ajoutercommentaire($commentaire);
 
header('Location: checkout.php');
}

?>
