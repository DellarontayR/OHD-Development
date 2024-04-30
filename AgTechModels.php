<?php include('../AgTechModelsServer.php'); 

$models = $_SESSION['models'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Meta Tags for Social Media -->
    <meta name="author" content="Dellarontay Readus" />
    <meta name="description"
        content="Organic Harvest Digital Inc. is excited to introduce our Machine Learning AgTech Model listing! We hope our list helps farmers, enthusiasts, and advocates to learn about the potential of the technology while providing modern tools that bring a valuable impact to everyone involved. Plant disease detection or classification, crop recommendation systems, and  rich geospatial insights for agriculture and sustainability." />

    <meta property="og:title" content="OHD Inc. AgTech Machine Learning Model List" />
    <meta property="og:description"
        content="Organic Harvest Digital Inc. is excited to introduce our Machine Learning AgTech Model listing! We hope our list helps farmers, enthusiasts, and advocates to learn about the potential of the technology while providing modern tools that bring a valuable impact to everyone involved. Plant disease detection or classification, crop recommendation systems, and  rich geospatial insights for agriculture and sustainability. " />
    <meta property="og:image" content="www.organicharvestdigital.org/assets/img/bg-masthead.jpg" />
    <meta property="og:url" content="www.organicharvestdigital.org" />
    <meta property="og:type" content="profile" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="profile:first_name" content="Dellarontay" />
    <meta property="profile:last_name" content="Readus" />
    <!-- Page Icon -->
    <link rel="icon" href="Images/Color/1x/Social-Media-Icon.png" type="image/x-icon">
    <title>OHD Inc. AgTech Machine Learning Model List</title>

    <link rel="canonical" href="https://www.organicharvestdigital.org/AgTechModels.php">
    <meta property="og:url" content="https://www.organicharvestdigital.org/AgTechModels.php">
    <meta property="og:site_name" content="OHD Inc. AgTech ML Model Listing">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="OHD Inc. AgTech ML Model Listing">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top" style="padding-top:88px;">
    <!-- Navigation-->
    <nav class="navbar fixed-top navbar-light navbar-expand-lg" id="mainNav">
        <div class="container">
            <i class="fas fa-leaf"></i> &ensp;
            <a class="navbar-brand" style="color:black" href="index.html">OHD</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div>
                <a class="mx-2" href="https://twitter.com/OrganicHarvest4"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="https://www.facebook.com/Organic-Harvest-Digital-185758333096937"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="https://www.instagram.com/organic.harvest/"><i class="fab fa-instagram"></i></a>
                <a class="mx-2" href="https://www.linkedin.com/company/organic-harvest-digital"><i class="fab fa-linkedin"></i></a>

                </li>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto" style="text-align: center;">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black"
                            href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black"
                            href="about.html">About Us</a>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black"
                            href="AgTechModels.php">AgTech Models</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black"
                            href="AgTechModels.php#subscribe">Subscribe</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:black"
                            href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pt-2">
        <h3 class="text-center border-bottom" style="font-weight: 300; line-height: 1.2;">AgTech Machine Learning Model
                    Listing</h3>
                <p id="subscribe">
                    Welcome! Organic Harvest Digital Inc. is excited to introduce our Machine Learning AgTech Model listing! We hope our
                    list helps farmers, enthusiasts, and advocates to learn about the potential of the technology while
                    providing modern tools that bring a valuable impact to everyone involved.
                </p>

                    <!-- Subscribe -->
            <div class="p-2">
                <p><b>Join our newsletter:</b> Get monthly updates about the AgTech industry and AgTech ML Models sent straight to your inbox. </p>

                <div>
                    <form class="form-inline" action="subscribe.php" method="POST">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your email address" name="email">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-2 p-2">Subscribe</button>
                    </form>
                </div>
            </div>
</div>

    <div class="container" style="overflow-x:auto;">
        <table class="table mt-4">
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
                    <td>
                        <?php echo htmlspecialchars($model["modelName"]); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($model["summary"]); ?>
                    </td>
                    <td>
                        <a href="<?php echo htmlspecialchars($model["link"]); ?>" target="_blank">
                            Model Link
                        </a>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($model["technologyUsed"]); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($model["licenseType"]); ?>
                    </td>
                </tr>
                <?php } ?>

            </tbody>

        </table>
    </div>



    <footer class="footer bg-black small text-center text-white-50">
        <h2 class="h-center">Where Feeding People Matter</h2>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="https://twitter.com/OrganicHarvest4"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://www.facebook.com/Organic-Harvest-Digital-185758333096937"><i
                    class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://www.instagram.com/organic.harvest/"><i class="fab fa-instagram"></i></i></a>
            <a class="mx-2" href="https://www.linkedin.com/company/organic-harvest-digital"><i class="fab fa-linkedin"></i></i></a>

        </div>
        <div>
            <span style="font-size:smaller; color: #f3bebf;">&copy;Organic Harvest Digital Inc. 2021 - 2024<a
                    class="text-white" href="#"></a><a class="text-white" href="#"></a></span>
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