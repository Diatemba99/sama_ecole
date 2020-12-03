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

        <!-- Search form -->
        <form class="form-inline" method="post">
            <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
            <input type="submit" name="submit" value="SEARCH">
        </form>

        <?php

        $con = new PDO("mysql:host=localhost; dbname=sama_ecole", 'root', '');

        if (isset($_POST["submit"])) {
            $str = $_POST['search'];
            $sth = $con->prepare("SELECT * from `infos_ecole` WHERE  categorie = '$str' ");
            
            // $sth = $con->prepare("SELECT * from `infos_ecole` WHERE  categorie = 'telecom' ");

            $sth->setFetchMode(PDO::FETCH_OBJ);
            $sth->execute();
         


            if ($row = $sth->fetch()) {
        ?>

                <table>
                    <tr>
                        <th>NOM</th>
                        <th>TELE</th>
                        <th>ADRESSE</th>
                        <th>BP</th>
                        <th>FAX</th>
                    </tr>

                

                    <tr>
                        <td><?php echo $row->nom; ?></td>
                        <td><?php echo $row->tel; ?></td>
                        <td><?php echo $row->adresse; ?></td>
                        <td><?php echo $row->bp; ?></td>
                        <td><?php echo $row->fax; ?></td>
                    </tr>

                </table>
                <!-- ************************************************ -->
                <!-- ************************************************ -->
                <!-- ************************************************ -->
                <!-- ************************************************ -->
                <!-- Card -->
                <div class="container w-50">
                    <div class="card">

                        <!-- Card image -->
                        <!-- <img class="card-img-top" width="5%" src="<?php echo $row->logo; ?>" alt="Card image cap"> -->

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <!-- <h4 class="card-title"><a>NOM:<?php echo $row->nom; ?></a></h4>
                            <h4 class="card-title"><a>TEL:<?php echo $row->tel; ?></a></h4>
                            <h4 class="card-title"><a>ADRESSE:<?php echo $row->adresse; ?></a></h4>
                            <h4 class="card-title"><a>FAX:<?php echo $row->fax; ?></a></h4>
                            <h4 class="card-title"><a>EMAIL:<?php echo $row->email; ?></a></h4> -->


                        </div>

                    </div>
                    <!-- Card -->
                </div>
        <!-- <?php
            } 
            else {
                echo "Cette ecole n'existe pas";
            }
        
        }
    
        ?> -->

        <!-- ------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------ -->

        <?php
                        if($row = $sth->fetch()){
                            echo "<table class='table table-hover table-responsive table-bordered'>";
                                echo "<tr>";
                                     echo "<th>ECOLES</th>";
                                     echo "<th>ADRESSE</th>";
                                     echo "<th>BOITE POSTAL</th>";
                                     echo "<th>EMAIL</th>";
                                     echo "<th>LOGO</th>";
                                echo "</tr>";
                               
                                while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
                                    extract($row);
  
                                    echo "<tr>";
                                        echo "<td>{$nom}</td>";
                                        echo "<td>{$adresse}</td>";
                                        echo "<td>{$bp}</td>";
                                        echo "<td>{$email}</td>";
                                        echo "<td><img src='{$email}'></td>";
                                     echo "</tr>";
                                }
                             echo "</table>";
                             // paging buttons will be here
                        }
  
                        // tell the user there are no products
                        else{
                             echo "<div class='alert alert-info'>pas d'ecoles trouves .</div>";
                        }
                    
                        ?>




        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>

    </html>