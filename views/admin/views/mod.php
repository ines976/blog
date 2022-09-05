<?php
include "../core/eventC.php";
include "../entities/event.php";

$event1C=new eventC();

if (isset($_POST['modifier1'])){
	if (!empty($_POST['id_event']) and 
    !empty($_POST['nom_event']) and 
    !empty($_POST['pourcentage']) and 
    !empty($_POST['date_debut']) and 
    !empty($_POST['date_fin']) and
    !empty($_POST['id_prod']) and
    !empty($_POST['img_event'])) 
{ 
    $event=new event($_POST['id_event'],$_POST['nom_event'],$_POST['pourcentage'],$_POST['date_debut'],$_POST['date_fin'],$_POST['id_prod'],$_POST['img_event']);
    $event1C->modifierevent($event);
echo("Ok! ");
    header('Location: listeEvent.php');
    }
    echo("Verifier les Champs! ");
    }
?>