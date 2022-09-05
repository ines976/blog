<?php

include_once '../core/articlec.php';
include_once '../entities/article.php' ;

echo 'ze';

if (isset($_POST['user'], $_POST['sujet'], $_POST['text'], $_POST['category']))
{



    $article = new article($_POST['category'],$_POST['sujet'],$_POST['text'],$_POST['user']);
    $articleC = new articleC();
    $articleC->ajouterarticle($article);
    
header('Location: checkout.php');
}

	

?>
