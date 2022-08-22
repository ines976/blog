<?php
include_once '../../Controller/CommentaireC.php';

$commentaireC = new commentaireC();
$commentaireC->modifierEtat($_GET['id'],'Approved');
header('Location:tables.php');
?>