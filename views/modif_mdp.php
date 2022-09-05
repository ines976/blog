<?php require "../views/inc/header.php"; require "../config.php";?>


<section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head nav nav-item active">Votre Compte Aroma</div>
            <ul class="main-categories">
              <li class="common-filter">
                <form action="#">
                  <ul>
                      <li><a href="#">Vos Informations</a></li>
                  </ul>
                </form>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <div class="filter-bar d-flex flex-wrap align-items-center">
          </div>
            <?php
                                  $user = $_SESSION['user'];
                               
                                    $db = config::getConnexion();
                                    $req = $db->prepare('SELECT * from client WHERE LoginClient= ?');
                                    $req->execute(array($user));
                                    $cli=$req->fetch();
            ?>

          <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <div class="col-md-12">
					    <div class="login_form_inner register_form_inner">
						    <h3>CHANGER DE MOT DE PASSE</h3>
						<form class="row login_form" id="register_form" method="POST" action="modifier_pass.php"  name="register">
							<div class="col-md-12 form-group">
                                <label>Mot de passe actuel :</label>
								<input type="" class="form-control" id="name" name="mdp_actuel" >
							</div>
							<div class="col-md-12 form-group">
                                <label>Nouveau Mot de Passe:</label>
								<input type="password" class="form-control" id="name" name="mdp_new"  >
							</div>
							<div class="col-md-12 form-group">
                                <label>Confirmer Mot de passe:</label>
								<input type="password" class="form-control" id="name" name="mdp_new_confirm">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="envoi" class="button button-register w-100">MODIFIER</button>
							</div>
						</form>
					</div>
				</div>
                    </div>
                </div>         
           </section>
        </div>
      </div>
    </div>
  </section>

<?php require "../views/inc/footer.php";?>