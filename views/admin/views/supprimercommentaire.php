<?PHP
include "../core/commentaireC.php";
$commentaireC=new commentaireC();
if (isset($_POST["id"])){
	$commentaireC->supprimercommentaire($_POST["id"]);
	header('Location: affichercommentaire.php');
}

?>