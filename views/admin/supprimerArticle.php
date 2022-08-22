<?php
include_once '../../Controller/ArticleC.php';

$articleC = new articleC();
$articleC->supprimerarticle($_GET['id']);
header('Location:tables.php');
?>