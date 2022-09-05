<?PHP
include "../../../config.php";
include "../../../Core/promotion_core.php";
include "../../../Entities/promotions.php";
$baseUrl = dirname(__DIR__,2)."/images//";
$prod= new Promotion_core();
if (isset($_GET["ID"])){
    $id =$_GET["ID"];
    $recup=$prod->recuperer_promotion($id);
    var_dump($recup);
    unlink($baseUrl.$recup["Image"]);
	$prod->supprimer_promotion($id);

}
header('Location: ../prom.php');
?>