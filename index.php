<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nhat ky</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- database.net -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- Libraries Stylesheet -->
    <link href="public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <?php

        $action = "signin";
        if (isset($_GET['act']))
            $action = $_GET['act'];

        switch ($action) {
            case 'signin':
                include "App/views/signin.php";
                break;
            case 'home':
                include "App/views/home.php";
                break;
            case 'list_diary':
                include "App/views/listDiary.php";
                break;
            case 'details_diray':
                include "App/views/details_diray.php";
                break;
            case 'add_diary':
                include "App/views/add_diary.php";
                break;
            case 'updata_diray':
                include "App/views/updata_diray.php";
                break;
            case 'add_member':
                include "App/views/add_member.php";
                break;
            case 'list_notification':
                include "App/views/list_notification.php";
                break;
            case 'profile':
                include "App/views/profile.php";
                break;
            case 'update_user':
                include "App/views/update_user.php";
                break;
            case 'change_password':
                include "App/views/change_password.php";
                break;
            case 'fogot_password':
                include "App/views/fogot_password.php";
                break;
            case 'register':
                include "App/views/register.php";
                break;


            case 'logout':
                unset($_SESSION['user_id']);
                unset($_SESSION['access_token']);
                header("location: login.php");
                break;
        }



        ?>
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/lib/chart/chart.min.js"></script>
    <script src="public/assets/lib/easing/easing.min.js"></script>
    <script src="public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="public/assets/js/main.js"></script>
    <!-- database.net -->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="public/assets/js/add.js"></script>
   




</body>


</html>
<?php
ob_end_flush();
?>