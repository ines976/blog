<?php
include_once '../../Controller/CommentaireC.php';

$commentaireC = new commentaireC();
$commentaireC->modifierEtat($_GET['id'],'Rejected');
header('Location:tables.php');
?>