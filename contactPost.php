<?php include('../contactPostServer.php'); 

$fromEmail = $_SESSION['fromEmail'];
$bccEmail = $_SESSION['bccEmail'];

?>

<?php

    if(isset($_POST['submit'])){
        $name = $email =$company = $comment = '';
        $errors = [];
        // Check name
        if(empty($_POST['name'])){
            $errors["name"] = "A name is required <br />";
        }
        {
            $name = $_POST['email'];
        }

        // Check Email
        if(empty($_POST['email'])){
            $errors["email"] = "An email is required <br />";
        }
        {
            $email = $_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error["email"] ="Email must be a valid email address";
            }
        }

        // Error and result handling
        if(array_filter($errors)){
            echo "<h1 class='text-center' style='font-weight: 300; line-height: 1.2;'>" .  print_r($errors, true) . "</h1>";
        }else{
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $company = htmlspecialchars($_POST['company']);
            $comment = htmlspecialchars($_POST['comment']);

            $name = mysqli_real_escape_string($conn,$name);
            $email = mysqli_real_escape_string($conn,$email);
            $company = mysqli_real_escape_string($conn,$company);
            $comment = mysqli_real_escape_string($conn,$comment);

            $sql = "INSERT INTO contactUsEmails(name,email,company,comment) VALUES('$name','$email', '$company', '$comment')";

            if(mysqli_query($conn,$sql)){
                echo "<h1 class='text-center' style='font-weight: 300; line-height: 1.2;'> Thank you $name for contacting OHD!</h1>";
                $message = file_get_contents("emailTest2.html");
                $message = str_replace("#name#", $name,$message);

                $headers = "From: Organic Harvest Digital Inc. $fromEmail" . "\r\n" . "Bcc: $bccEmail" . "\r\n";
                $headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";
                
                $headers .= "X-Sender: Organic Harvest Digital Inc. $fromEmail \r\n";
                $headers .= "X-Priority: 1 \r\n"; // Urgent message!
                $headers .= "MIME-Version: 1.0\r\n";

                // Not sure
                $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
                $headers .= "Return-Path: $bccEmail\r\n"; // Return path for errors


                mail($email,"Thank you $name for contacting OHD!",$message,$headers);
            }else{
                echo "<h3 class='text-center' style='font-weight: 300; line-height: 1.2;'> It looks like there was an issue with the server, please try again later. </h3>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Tags for Social Media -->
    <meta name="author" content="Dellarontay Readus" />
    <meta name="description"
        content="Organic Harvest Digital Inc. is an AgTech company seeking to build scalable farming infrastructures and processes to enable more people to grow more of what they love." />

    <meta property="og:title" content="Organic Harvest Digital Contact Page" />
    <meta property="og:description"
        content="Organic Harvest Digital Inc. is an AgTech company seeking to build scalable farming infrastructures and processes to enable more people to grow more of what they love. " />
    <meta property="og:image" content="www.organicharvestdigital.org/assets/img/bg-masthead.jpg" />
    <meta property="og:url" content="www.organicharvestdigital.org" />
    <meta property="og:type" content="profile" />
    <meta name="twitter:card" content="summary_large_image" />

    <meta property="profile:first_name" content="Dellarontay" />
    <meta property="profile:last_name" content="Readus" />

    <!-- Page Icon -->
    <link rel="icon" href="Images/Color/1x/Social-Media-Icon.png" type="image/x-icon">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <!--CSS stylesheet-->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Contact Us OHD Inc.</title>

</head>

<body style="padding-top:88px;">
    <!-- Navigation-->
    <nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg" id="mainNav">
        <div class="container">
            <i class="fas fa-leaf" href="index.html"></i> &ensp;
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
                            href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="margin-bottom:0px;">
        We're now tracking AgTech Machine Learning Models. View our
        <a role="button" href="AgTechModels.php" class="btn btn-outline-success btn-link my-2 my-sm-0 p-2"
            style="background-color: white;">AgTech Model Listing</a>
        today!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container pt-4 pb-4">
        <h1 class="text-center" style="font-weight: 300; line-height: 1.2;">Contact the OHD Team
        </h1>
        <form action="contactPost.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name"  value="<?php echo $name ?>" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $email ?>" disabled>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="company">Company or Organization</label>
                <input class="form-control" id="company" value="<?php echo $company ?>" disabled>
            </div>
            <div class="form-group">
                <label for="comment">Message to our Team</label>
                <textarea class="form-control" id="comment" disabled> <?php echo $comment ?></textarea>
            </div>
        </form>
    </div>

    <!--  Footer, contain hyperlinked logo icons -->
    <footer class="footer bg-black small text-center text-white-50">
        <h2 class="h-center">Where Feeding People Matters</h2>
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
    <!-- Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>   -->
    <!-- New Jquery Javascript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- Bootstrap Javascript -->
    <!--Font Awesome-->
</body>

</html>