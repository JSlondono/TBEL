<!doctype html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alimentos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../../fuentes/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../carruselstyle/estilos.css?v=<?php echo (rand()); ?>" />
    <script src="/js/mi_script.js?v=<?php echo (rand()); ?>"></script>

</head>


<body>

    <?php
    // Importar la conexión
    require '../bd/database.php';
    $db = conectarDB();


    // consultar
    $query = "SELECT * FROM productos WHERE categorias = 'Tecnologia' and VendedorId = 1 LIMIT 0,1";
    $query2 = "SELECT * FROM productos WHERE categorias = 'Tecnologia' and VendedorId = 1 LIMIT 1,1";
    $query3 = "SELECT * FROM productos WHERE categorias = 'Tecnologia' and VendedorId = 1 LIMIT 2,1";

    // obtener resultado
    $resultado = mysqli_query($db, $query);
    $resultado2 = mysqli_query($db, $query2);
    $resultado3 = mysqli_query($db, $query3);


    ?>

    <div class="container">

        <div class="container-login">



            <div class="wrap-login">




                <!--LLAMADA BASE DE DATOS DE LA IMAGEN-->
                <div class="carta">
                    <script>
                        $('.carousel').carousel({
                            interval: false,
                        });
                    </script>
                    <div id="carouselExample" class="carousel carousel slide" data-bs-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">


                            <?php while ($productos = mysqli_fetch_assoc($resultado)) : ?>
                                <div class="carousel-item active">

                                    <!--PRODUCTO IMAGEN-->

                                    <img src="../../crud/admin/productos/<?php echo $productos['imagen']; ?>">

                                    <div class="carousel-caption d-none d-md-block">

                                        <h5><?php echo $productos['NombreProducto']; ?> $<b><?php echo $productos['precio']; ?></b></h5>

                                        <p><?php echo $productos['descripcion']; ?></p>

                                        <!--NOMBRE PRODUCTO 1--->
                                    <?php endwhile; ?>
                                    </div>
                                </div>



                                <div class="carousel-item">
                                    <?php while ($productos = mysqli_fetch_assoc($resultado2)) : ?>
                                        <img src="../../crud/admin/productos/<?php echo $productos['imagen']; ?>">
                                        <div class="carousel-caption d-none d-md-block">

                                            <h5><?php echo $productos['NombreProducto']; ?> $<b><?php echo $productos['precio']; ?></b></h5>

                                            <p><?php echo $productos['descripcion']; ?></p>
                                        <?php endwhile; ?>
                                        </div>

                                </div>
                                <div class="carousel-item">
                                    <?php while ($productos = mysqli_fetch_assoc($resultado3)) : ?>
                                        <img src="../../crud/admin/productos/<?php echo $productos['imagen']; ?>">
                                        <div class="carousel-caption d-none d-md-block">

                                            <h5><?php echo $productos['NombreProducto']; ?> $<b><?php echo $productos['precio']; ?></b></h5>

                                            <p><?php echo $productos['descripcion']; ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                    <!--data-bs-interval="10000" </div>-->


                    <!--LLAMADA BASAE DE DATOS INFORMACION-->


                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="../../categorias">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                </svg>
                            </a>
                        </li>

                    </ul>


                </div>


            </div>

        </div>

    </div>



    <script src="../../../jquery/jquery-3.3.1.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>


<?php

// Cerrar la conexión
mysqli_close($db);
?>

</html>