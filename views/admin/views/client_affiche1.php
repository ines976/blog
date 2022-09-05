<?php
 require '../../../config.php';
 include "../../inc/header_admin.php";

 ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Table des Clients</strong>
                                <div> <a href="client_affiche.php">tri</a> </div>
                            </div>
                            <div class="card-body">
                                <?php
                                
                                    $sql = "select * from client order by MDPClient DESC";
                                    $db = config::getConnexion();
                                    $req = $db->prepare($sql);
                                    $req->execute();
                                    $cli=$req->fetchAll();
                                ?>
                               <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Login</th>
                                            <th>Mot de passe</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Adresse</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($cli as $client): ?>
                                        <tr>
                                            <td>
                                                <?= $client['id'] ?>    
                                            </td>
                                            <td>
                                                <?= $client['LoginClient'] ?>
                                            </td>
                                            <td>
                                                 <?= $client['MdpClient'] ?>
                                            </td>
                                            <td>
                                                <?= $client['NomClient'] ?>
                                            </td>
                                            <td>
                                                <?= $client['PrenomClient'] ?>
                                            </td>
                                            <td>
                                                <?= $client['TelClient'] ?>
                                            </td>
                                            <td>
                                                 <?= $client['MailClient'] ?>
                                            </td>
                                            <td>
                                                <?= $client['AdresseClient'] ?>
                                            </td>
                                        </tr>
                                            <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
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


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
