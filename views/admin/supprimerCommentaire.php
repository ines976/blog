<?php
include_once '../../Controller/CommentaireC.php';

$commentaireC = new commentaireC();
$commentaireC->supprimercommentaire($_GET['id']);
header('Location:tables.php');
?>