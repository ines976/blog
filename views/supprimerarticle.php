<?PHP
include "../core/articlec.php";
$livraison1c=new articlec();
if (isset($_POST["id"])){
	$livraison1c->supprimerarticle($_POST["id"]);
	header('Location: checkout.php');
}

?>