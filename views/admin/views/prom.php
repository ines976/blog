


<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->
<?php 
 include "../../inc/header_admin.php"; ?>


   
  <main class="container p-4">

<div class="row">
<div class="col-md-4">
<!-- MESSAGES -->
<?php if (isset($_SESSION['message'])) { ?>
<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
<?= $_SESSION['message']?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php  unset($_SESSION['message']);
unset($_SESSION['message_type']);} ?>

      <!-- ADD TASK FORM -->
      <center>
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET">
<div class="input-group">
  <input name="acode" type="text" class="form-control bg-light border-0 small" placeholder="Recherche par code promo" aria-label="Search" aria-describedby="basic-addon2"/>
    <div class="input-group-append">

<button name="but8" class="btn btn-primary"  type="submit">
        <i class="fas fa-search fa-sm"></i>

      </button>
    </div>

  </div>
</form>
<center/>
      <div class="card card-body">
        <form action="promo.php" method="POST">
          <div class="form-group">
            


            <input  type="text" pattern="\d*" name="codepromo" class="form-control" placeholder="code promo"     required oninvalid="setCustomValidity('le code doit contenir 4 chiffres ')" oninput="setCustomValidity('')" autofocus>
                    </div>
                    <div class="form-group">
                      <input autocomplete="off"  type="date" name="dated" class="form-control" placeholder="Date de debut"   required oninvalid="setCustomValidity('veuillez saisir une date de debut valide')" oninput="setCustomValidity('')" autofocus>
                    </div>
                    <div class="form-group">
                      <input autocomplete="off"   type="date" name="datef" class="form-control" placeholder=" date fin"  required oninvalid="setCustomValidity('veuillez saisir une date de fin valide')" oninput="setCustomValidity('')" autofocus>
                    </div>
                    <div class="form-group">
                      <input type="text" pattern="\d*" maxlength="2" name="prixp" class="form-control" placeholder="prix"  required oninvalid="setCustomValidity('Le motif doit etre non vide')" oninput="setCustomValidity('')"  autofocus>
                    
                    </div>
                    <div class="form-group">
                    <input  type="text" name="nomp" class="form-control" placeholder="nom de produit de la promotion " required    >
                                        </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="ajouter promotion">
        </form>
      </div>
    </div>
  
        
    
    <div class="col-md-8">
          
                    
        <center>  <input type="submit" name="telecharger en pdf" class="btn btn-success btn-block" value="telecharger en pdf" style="width:325px">
        </form>
    </div>
    
      
      </div>
  </div>
</main>
     

                    
                       

                        
                    </div>
                </form>
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
