<!-- include '../AgTechModels.php'; -->
<?php include('../AgTechModels.php'); 

session_start();

$models = $_SESSION['models'];
$name = $_SESSION['name'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags for Social Media -->
  <meta name="author" content="Dellarontay Readus" />
  <meta
  name="description"
  content="Organic Harvest Digital Inc. is excited to introduce our Machine Learning AgTech Model listing! We hope our list helps farmers, enthusiasts, and advocates to learn about the potential of the technology while providing modern tools that bring a valuable impact to everyone involved. Plant disease detection or classification, crop recommendation systems, and  rich geospatial insights for agriculture and sustainability."/>

  <meta property="og:title" content="OHD Inc. AgTech Machine Learning Model List" />
  <meta property="og:description" content="Organic Harvest Digital Inc. is excited to introduce our Machine Learning AgTech Model listing! We hope our list helps farmers, enthusiasts, and advocates to learn about the potential of the technology while providing modern tools that bring a valuable impact to everyone involved. Plant disease detection or classification, crop recommendation systems, and  rich geospatial insights for agriculture and sustainability. " />
  <meta property="og:image" content="www.organicharvestdigital.org/Images/IMG-4303-2.jpg" />
  <meta property="og:url" content="www.organicharvestdigital.org"/>
  <meta property="og:type" content="profile" />
  <meta name="twitter:card" content="summary_large_image"/>

  <meta property="profile:first_name" content="Dellarontay" />
  <meta property="profile:last_name" content="Readus" />

  <!-- Page Icon -->
  <link rel="icon" href="Images/Color/1x/Social-Media-Icon.png" type="image/gif">

<title>OHD Inc. AgTech Machine Learning Model List</title>

            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
  </head>
<body id="page-top" style="padding-top:88px;" >
        <!-- Navigation-->
        <nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg" id="mainNav">
            <div class="container">
                <i class="fas fa-leaf"></i> &ensp;
                <a class="navbar-brand" style="color:black" href="index.html">OHD</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>   
                </button>
                <div>
                    <a class="mx-2" href="https://twitter.com/OrganicHarvest4"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://www.facebook.com/Organic-Harvest-Digital-185758333096937"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/organic.harvest/"><i class="fab fa-instagram"></i></a></li>
                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto" style="text-align: center;">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black" href="about.html">About Us</a>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black" href="pubmodels.php">AgTech Models</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="container" style="overflow-x:auto;">
    <h3>OHD Inc. AgTech Model Listing</h3>
    <table class="table">
        <thead>
        <tr id="heading">
            <!-- <th scope="col">#</th> -->
            <th scope="col">Model Name</th>
            <th scope="col">Summary</th>
            <th scope="col">Link</th>
            <th scope="col">Technology Used</th>
            <th scope="col">License Type</th>
        </tr>
        </thead>
    <tbody>

    <!-- Model Listing -->
    <?php foreach($models as $model) {?>
        <tr>
                <!-- <td scope="row">#</td> -->
                <td><?php echo htmlspecialchars($model["modelName"]); ?></td>
                <td><?php echo htmlspecialchars($model["summary"]); ?>
</td>
                <td>
                <a href="<?php echo htmlspecialchars($model["link"]); ?>" target="_blank" > 
                    Model Link
                </a>
</td>
                <td><?php echo htmlspecialchars($model["technologyUsed"]); ?>
</td>
                <td><?php echo htmlspecialchars($model["licenseType"]); ?>
 </td>
        </tr>
    <?php } ?>

    </tbody>

    </table>

</div>

<footer class="footer bg-black small text-center text-white-50">
    <div class="social d-flex justify-content-center">
            <a class="mx-2" href="https://twitter.com/OrganicHarvest4"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://www.facebook.com/Organic-Harvest-Digital-185758333096937"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://www.instagram.com/organic.harvest/"><i class="fab fa-instagram"></i></i></a>
        </div>
        <div>
                    <span style="font-size:smaller; color: #f3bebf;">&copy;Organic Harvest Digital Inc. 2024<a class="text-white" href="#"></a><a class="text-white" href="#"></a></span>
        </div>
  </footer>
      <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>