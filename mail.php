<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

///Path to 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php';

// Load Composer's autoloader
//require 'vendor/autoload.php';

$mail=new PHPMailer(true);

try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = 'Message from a site visitor '.$name;

    $mail->CharSet = 'UTF-8';

    $mail->IsSMTP();
    $mail->Host       = 'smtp.gmail.com';

    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    // $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = true;

    $mail->Username   = 'shaishta127@gmail.com';
    $mail->Password   = 'Hello1271';

    $mail->SetFrom($email, $name);
    $mail->addAddress($email, $name);
    $mail->Subject    = $subject;
    $mail->MsgHTML($message);

    $mail->send();
    echo'
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>La Mezardière </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+230 5934 9535"><i class="fa fa-phone-alt text-primary me-2"></i> +230 5934 9535</a>
                    <a class="text-body px-2" href="mailto:contact@lemezardiere.com"><i class="fa fa-envelope-open text-primary me-2"></i>contact@lemezardiere.com</a>
                </div>
            </div>
             <div class="col-lg-5 px-5 text-end">
               <!-- <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div> -->
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="img/icons/logoicon.png" alt="Icon">La Mezardière</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Accueil</a>
                <a href="about.html" class="nav-item nav-link">A Propos</a>
                <a href="project.html" class="nav-item nav-link">Villa/Specifications</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <!-- <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Appointment</a> -->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Envoyer</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-primary active" aria-current="page">Envoyer</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="fa fa-envelope display-1 text-primary"></i>
                    <h1 class="display-1">Envoyer</h1>
                    <h1 class="mb-4">Votre message a été envoyé avec succès!<br> Merci!</h1>
                    <!-- <p class="mb-4">Nous sommes désolés, la page que vous avez recherchée n’existe pas sur notre site Web! Peut-être aller sur notre page d’accueil ou essayer d’utiliser une recherche?</p> -->
                    <a class="btn btn-primary py-3 px-5" href="index.html">Pour revenir à la page d’accueil. Cliquez ici</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>La Mezardière Résidence, Arsenal, Ile Maurice</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+230 5934 9535</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>contacte@lamezardiere.com</p>

                </div>

                <div class="col">
                    <h3 class="text-light mb-4">Quick Links</h3>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="project.html">Specifications</a>

                </div>

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">La Mezardière Résidence</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you would like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By M-Unit</a>
                        <!-- <br> Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// $mailheader = "From:".$name."<".$email.">\r\n";

// $recipient = "shaishtapandea@gmail.com"; //to send mail to the person

// mail($recipient, $subject, $message, $mailheader)
// or die("Message failed. Please, send an email to shaishtapandea@gmail.com");