<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<?php
include "../core/eventC.php";
include "../entities/event.php";

if (!empty($_POST['id_event']) and 
    !empty($_POST['nom_event']) and 
    !empty($_POST['pourcentage']) and 
    !empty($_POST['date_debut']) and 
    !empty($_POST['date_fin']) and
    !empty($_POST['id_prod']) and
    !empty($_POST['img_event'])) 
{ 
     
$event1=new event($_POST['id_event'],$_POST['nom_event'],$_POST['pourcentage'],$_POST['date_debut'],$_POST['date_fin'],$_POST['id_prod'],$_POST['img_event']);
    

    
$event1C=new eventC();

$event1C->ajouterevent($event1);
header('Location: listeEvent.php');
}
else echo("Verifier les Champs! ");




?>

