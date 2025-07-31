

<?php include "./config/app.php";?>




<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="utf-8">
    <title>eLEARNING – Onlayn Təhsil Platforması</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= APP_URL ?>/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= APP_URL ?>/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= APP_URL ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= APP_URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= APP_URL ?>/assets/css/style.css?v=<?= time() ?>" rel="stylesheet">

</head>

<body>



    <!-- Navbar Start -->
<?php include "./includes/navbar.php";?>
    <!-- Navbar End -->

<!-- main start -->
<?php
 
$page = isset($_GET['page']) ? $_GET['page'] : "home";

$file = "page/$page.php";

if (file_exists($file)) {
    include $file;
} else {
    include "page/errors/404.php";
}
?>
<!-- main end -->

    <!-- Footer Start -->
     <?php include "./includes/footer.php";?>
</body>

</html>