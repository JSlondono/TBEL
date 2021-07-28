<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubicación</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

   <style>

        iframe{

            position: absolute;
            width: 100%;
            height: 90%;
        }

        
   </style>
</head>

<body class="app">

    <?php include_once 'includ/header.php' ?>



    <div class="app-wrapper">

        <div class="container-fluid">

            <!--MAPA-->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126916.74073834557!2d-75.65125209709198!3d6.24419882131964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428dfb80fad05%3A0x42137cfcc7b53b56!2sMedell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1627365016197!5m2!1ses-419!2sco"  style="border:1;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
        <!--//app-content-->

        <?php include_once 'includ/footer.php' ?>

    </div>
    <!--//app-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>