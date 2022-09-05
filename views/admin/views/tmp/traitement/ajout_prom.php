<?php
include "../../Core/promotion_core.php";
include "../../Entities/promotions.php";

$baseUrl = dirname(__DIR__,2)."/images//";
if(isset ($_POST['send']))
{
    $file_name = "";
    if(isset($_FILES['image']))
    
    {
        //var_dump($_POST);
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower((explode('.',$file_name)[1]));
  
        $expensions= array("jpeg","jpg","png");
        if(file_exists($file_name)) {
          echo "Sorry, file already exists.";
          }
        if(in_array($file_ext,$expensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG or jpg file.";
        }
  
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
  
        if(empty($errors)==true){
          move_uploaded_file($file_tmp,$baseUrl.$file_name);
          echo "Success";
          
        }

        else{
           print_r($errors);
        }
     }

    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
    $description=$_POST['description'];
    $idcat=$_POST['idCat'];


    $prom= new promotion($prix, $quantite,$nom, $file_name, $description,intval($idcat));
    var_dump($_POST,$nom,$prom); 
    $prom_core= new promotion_core();
    $prom_core->ajouter_promotion($prom);
    //var_dump($categorie);, 

    
}
header('Location: ../prom.php');

?>
