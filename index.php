<?php 
    include "api.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Covid-19 Data in Tunisia</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <p class="navbar-brand" >Covid-19 Data TN<sub>By<a href="http://wissem-hammami.ovh"> WISSEM HAMMAMI</a></sub></p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://wissem-hammami.ovh">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Covid-19 Data in Tunisia</h1>
                        <p class="fs-4">
                            <table class="table table-striped table-hover">
                           <?php 
                            if ($err) {
                                echo "cURL Error #:" . $err;
                            } else {
                                $data = $js_decode[0];
                                foreach ($data as $key => $value) {
                                    if($key != "code" && $key != "latitude" && $key != "longitude" && $key != "lastUpdate"){
                                        if ($key == "lastChange") {
                                            echo "<tr>";
                                            echo "<td><b>LastChange</b></td><td> ".$value."</td>";
                                            echo "<tr>";
                                        }
                                        else {
                                            echo "<tr>";
                                            $key_upper = ucfirst($key);
                                            echo "<td><b>".$key_upper."</b></td><td> ".$value."</td>";
                                            echo "<tr>";
                                        }
                                    }
                                }
                            }
                           ?> 
                           </table>
                        </p>
                        <a class="btn btn-primary btn-lg" href="index.php">Refresh</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
      
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;<a href="http://wissem-hammami.ovh"> Wissem Hammami</a></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
