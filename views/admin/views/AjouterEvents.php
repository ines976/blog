<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php 

 include "../../inc/header_admin.php"; ?><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
                <div class="container">
                    <div class="jumbotron">
            
                        <form method="POST" action="AjouterEvent.php" name="form" onsubmit="return saisie()"  >
                            <div class="form-group">
            
                                <h1 class="display-4">Ajouter evenement</h1> <br>
                                <div class="col-md- col-sm-6">
                                    <label> ID evenement</label> 
                                    <input type="text" name="id_event" class="form-control" placeholder="ID evenement" >
            
            
                                    <label>Nom de l'evenement</label> 
                                    <input type="text" name="nom_event" class="form-control" placeholder="Nom de l'evenement">
            
            
                                    <label>Pourcentage</label> 
                                    <input type="number" name="pourcentage" class="form-control" placeholder="Pourcentage">
            
            
                                    <label>Date de debut</label> 
                                    <input type="date" name="date_debut" class="form-control">
            
            
                                    <label>Date fin</label> 
                                    <input type="date" name="date_fin" class="form-control">
            
            
                                    <label>id du produit</label> 
                                    <input type="number" name="id_prod" class="form-control" placeholder="Nom du produit">
                                    
                                    <label>image de evenement</label> 
                                    <input type="text" name="img_event" class="form-control" placeholder="Image de l'evenement">
                                    <br>
            
            
                                    <input type="submit" name="ajouter" value="Ajouter" class="btn btn-info btn-lg btn-block">
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
         
							</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>




