<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<?php
 include "../../inc/header_admin.php"; ?>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-xs-6 col-sm-6">

                        <form method="POST" action="traitement/listeC.php">
                            <div class="container">
                                <h1> Liste des categories </h1>
</br>
<a href="prod.php">produits?! </a>
</br>
                                <table class="table table-bordered table-hover table-stripped">
                                    <tr><th>ID</th><th>descrition  </th><th>texte  </th></tr>
<tbody>
                                                <tr>
                                                    <td> 1</td>
                                                    <td> le produit avec id 22 n'est pas disponible</td>
                                                    <td> je veut commandr lors de sa disponibilité
                                                    </td>

                                                </tr> <tr>
                                                    <td> 2</td>
                                                    <td> livraison n'est pas a l'heure </td>
                                                    <td> le produit n'a pas arrivé
                                                    </td>
 

                                            

                                            
                                        </tbody>

                            </table>
                        </form>
                    </div>
                </div>
        
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->
 
    <!-- Right Panel -->


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="vendors/chosen/chosen.jquery.min.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

</body>

</html>
