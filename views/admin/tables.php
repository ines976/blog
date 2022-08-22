<?php
include_once ('../../Controller/ArticleC.php');
include_once ('../../Controller/CommentaireC.php');
include_once ('../../Controller/UtilisateurC.php');

$articleC = new articleC();
$articles = $articleC->getAllarticles();
$commentaireC = new commentaireC();
$commentaires = $commentaireC->getAllcommentaires();
$userC = new UtilisateurC();
$users = $userC->afficher_Utilisateur();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin The Grill</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Steave</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== --> <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Statistics</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Tables</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Icon</span>
                            </a>
                        </li> -->
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Google Map</span>
                            </a>
                        </li> -->

                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li> -->
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tables</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="dashboard.php" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <ol class="breadcrumb ms-auto">
                                <li><a href="profile.php" class="fw-normal">Profile</a></li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Table Article </h3>
                            <a href="ajouterArticle.php" ><p class="text-muted">Add Article</p></a>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#Id User</th>
                                            <th class="border-top-0">Sujet</th>
                                            <th class="border-top-0">Texte</th>
                                            <th class="border-top-0">Categorie</th>

                                            <th class="border-top-0">date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="container">
                                            <?php
                                            foreach ($articles as $article)
                                            {
                                            ?>
                                        <tr>
                                            <td><?php echo $article['id_user'] ; ?></td>
                                            <td><?php echo $article['subject'] ; ?></td>
                                            <td><?php echo $article['text'] ; ?></td>
                                            <td><?php echo $article['category'] ; ?></td>
                                            <td><?php echo $article['date_pub'] ; ?></td>
                                            <td>
                                                <button class="btn btn-primary"><a href="modifierArticle.php?id=<?php echo $article['id'];?>" class="text-light"> <i class="fa fas fa-edit style=font-size:36px" ></i></a></button>
                                                <button class="btn btn-danger"><a href="supprimerArticle.php?id=<?php echo $article['id'];?>" class="text-light"> <i class="fa fa-trash"></i></a></button>
                                            <td>
                                        </tr>
                                            <?php

                                            }
                                            ?>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Table Commentaire </h3>
                            <a href="ajouterCommentaire.php"> <p class="text-muted">Add Commentaire</p></a>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#id user</th>
                                            <th class="border-top-0">#id post</th>
                                            <th class="border-top-0">date</th>
                                         
                                            <th class="border-top-0">text</th>
                                            <th class="border-top-0">etat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            foreach ($commentaires as $commentaire)
                                            {
                                            ?>
                                            <td><?php echo $commentaire['id_user'] ; ?></td>
                                            <td><?php echo $commentaire['id_post'] ; ?></td>
                                            <td><?php echo $commentaire['date_pub'] ; ?></td>
                                            <td><?php echo $commentaire['text'] ; ?> </td>
                                            <td><?php echo $commentaire['etat'] ; ?></td>
                                            <td>
                                                <button class="btn btn-primary"><a href="modifierCommentaire.php?id=<?php echo $commentaire['id'];?>" class="text-light"> <i class="fa fas fa-edit style=font-size:36px" ></i></a></button>
                                                <button class="btn btn-danger"><a href="supprimerACommentaire.php?id=<?php echo $commentaire['id'];?>" class="text-light"> <i class="fa fa-trash"></i></a></button>
                                                <button class="btn btn-info"><a href="ApprouverCommentaire.php?id=<?php echo $commentaire['id'];?>" class="text-light"> <i class="fa fa-check-circle"></i></a></button>
                                                <button class="btn btn-danger"><a href="rejeterCommentaire.php?id=<?php echo $commentaire['id'];?>" class="text-light"> <i class="fa fa-stop-circle"></i></a></button>
                                            <td>
                                                <?php
                                                }
                                                ?>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Table Utilisateurs </h3>
                            <a href="ajouterUtilisateur.php"> <p class="text-muted">Add User</p></a>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">username</th>
                                        <th class="border-top-0">nom complet</th>
                                        <th class="border-top-0">email</th>

                                        <th class="border-top-0">password</th>
                                        <th class="border-top-0">role</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php
                                        foreach ($users as $commentaire)
                                        {
                                        ?>
                                        <td><?php echo $commentaire['username'] ; ?></td>
                                        <td><?php echo $commentaire['prenom_user'].' '.$commentaire['nom_user'] ; ?></td>
                                        <td><?php echo $commentaire['email_user'] ; ?></td>
                                        <td><?php echo $commentaire['password_user'] ; ?> </td>
                                        <td><?php echo $commentaire['role_user'] ; ?></td>
                                        <td>
                                            <button class="btn btn-primary"><a href="modifierCommentaire.php?id=<?php echo $commentaire['id'];?>" class="text-light"> <i class="fa fas fa-edit style=font-size:36px" ></i></a></button>
                                            <button class="btn btn-danger"><a href="supprimerACommentaire.php?id=<?php echo $commentaire['id'];?>" class="text-light"> <i class="fa fa-trash"></i></a></button>
                                        <td>
                                            <?php
                                            }
                                            ?>
                                    </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>