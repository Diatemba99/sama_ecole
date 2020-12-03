<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <input type="checkbox" id="ch">
    <label for="ch">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cl"></i>
    </label>
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->
    <!-- ******************* SIDEBAR              ******************** -->
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->
    <div class="sidebar">
        <header>CPANEL</header>
        <ul>
            <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="../page/ajoutAdmin.php"><i class="fas fa-users"></i>Utilisateurs</a></li>
            <li><a href="../page/gestion_ecoles.php"><i class="fas fa-school"></i>Ecole</a></li>
            <!-- <li><a href=""><i class="fas fa-sliders-h"></i>Services</a></li> -->
            <li><a href=""><i class="fas fa-sign-out-alt"></i>Deconnexion</a></li>
            <i class="fas "></i>
        </ul>
    </div>
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->
    <!-- *******************    CHIFFRES DU SITE   ******************** -->
    <!-- ************************************************************** -->
    <!-- ************************************************************** -->


    <div class="im">
        <!-- WElCOME MESSAGE -->
        <div class="btn welcome bg-success">
            <h1 class="text-white text-center">BIENVENUE SUR LE CPANEL DE SAMA_ECOLE</h1>
        </div>

        <!-- /////////////////// INFOS GENERAL ///////////////////////////// -->
        <div class="container  mt-5">
            <div class="card-columns chiffre ">
                <div class="card bg-primary text-white w text-center p-3">
                    <div><i class="fas fa-user-shield fa-3x"></i></div>
                    <blockquote class="blockquote mb-0">
                        <h1><strong>6</strong></h1>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Administratreurs <cite title="Source Title"></cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>



                <div class="card bg-danger w text-white text-center p-3">
                    <div><i class="fas fa-school fa-3x"></i></div>
                    <blockquote class="blockquote mb-0">
                        <h1><strong>20</strong></h1>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Ecoles <cite title="Source Title">populaires</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>



                <div class="card bg-success w text-white text-center p-3">
                    <div><i class="fas fa-users fa-3x"></i></div>
                    <blockquote class="blockquote mb-0">
                        <h1 class=""> <strong>147</strong> </h1>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Visiteurs <cite title="Source Title"></cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>

            </div>
            <!--foratou   -->
            <!-- div container -->
        </div>
        <!-- ************************************************************** -->
        <!-- ************************************************************** -->
        <!-- *******************  INFOS SUR LES ADMINS ******************** -->
        <!-- ************************************************************** -->
        <!-- ************************************************************** -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <table class="table">
                        <thead>
                            <tr class="bg-light">
                                <th><i class="fas fa-users-cog "></i> ADMINS</th>
                                <th></th>
                                <th></th>
                                <th><a href="../page/ajoutAdmin.php" class=""><i class="fas fa-tools"></i> GERER</a></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">PSEUDO</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PASSWORD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                <div class="col-sm-6">
                    <table class="table">
                        <thead>
                            <tr class="bg-light">
                                <th><i class="fas fa-school"></i> ECOLES</th>
                                <th></th>
                                <th></th>
                                <th><a href="../page/gestion_ecoles.php" class=""><i class="fas fa-tools"></i> GERER</a></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOM</th>
                                <th scope="col">FAX</th>
                                <th scope="col">BOITE POSTALE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- container tables -->
        </div>
<!-- last div -->
</div>
        <!-- *************************************************** -->
        <!-- *************************************************** -->
        <!-- *************************************************** -->
        <!-- *************************************************** -->
       




        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>