<?php

// require '../SamaEcole/GestionAdmin/Classes/database.php';
$dsn = "mysql:host=localhost; dbname= sama_ecole";

$username = 'root';

$passwordDb = '';

$options = [];

try {
  $connection = new PDO($dsn, $username, $passwordDb, $options);
} catch (PDOException $e) {
}

// mettre la connexion a la base de donnees
// $con = mysqli_connect('localhost', 'root', '');
// mysqli_select_db($con, 'sama_ecole');

if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])) {

  $pseudo = $_POST['pseudo'];

  $email = $_POST['email'];

  $password = $_POST['password'];

  $sql = "INSERT INTO admin(pseudo, email, password) VALUES(:pseudo, :email, :password)";

  $statement = $connection->prepare($sql);


  if ($statement->execute([':pseudo' => $name, ':email' => $email, ':password' => $password])) {

    echo "Insertion reussie";
  }
}








?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>

  <!-- ===================================================================================================================== -->
  <!-- ===================================================================================================================== -->
  <!-- =================                          SEARCH AND NAVBAR         ===================================================== -->
  <!-- ===================================================================================================================== -->
  <!-- ===================================================================================================================== -->
  <!-- ===================================================================================================================== -->
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5 mb-4">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="" class="icone" width="35%"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../dashboard/index.php">DASHBOARD<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Deconnexion</a>
        </li>



      </ul>
      <!-- Links -->

      <!-- Search form -->
      <form class="form-inline">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>
    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->






  <div class="container mb-5">
    <form class="text-center border border-light p-5" method="post">
      <p class="h4 mb-4">Ajouter Admin</p>
      <!-- pseudo -->
      <input type="text" placeholder="pseudo" class="form-control mb-4" name="pseudo">

      <!-- Email -->
      <input type="email" placeholder="mail" class="form-control mb-4" name="email">

      <!-- Password -->
      <input type="password" placeholder="password" class="form-control mb-4" name="password">


      <!-- Sign in button -->
      <button name="submit" class="btn btn-info btn-block my-4" type="submit">S'inscrire</button>
    </form>
  </div>

  <!------------------- C O N N E X I O N  ----------------------->
  <!------------------- C O N N E X I O N  ----------------------->
  <!------------------- C O N N E X I O N  ----------------------->
  <!------------------- C O N N E X I O N  ----------------------->








  <!-- ===================================================================================================================== -->
  <!-- ===================================================================================================================== -->
  <!-- =================                          PIED DE PAGE         ===================================================== -->
  <!-- ===================================================================================================================== -->
  <!-- ===================================================================================================================== -->
  <!-- ===================================================================================================================== -->
  <!-- Footer -->
  <footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->






  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>

</body>

</html>