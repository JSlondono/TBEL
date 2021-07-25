<?php 
    // Importar la conexión
    require __DIR__ . '/../config/database.php';
    $db = conectarDB();


    // consultar
    $query = "SELECT * FROM productos LIMIT ${limite}";

    // obtener resultado
    $resultado = mysqli_query($db, $query);


?>

<div class="contenedor-anuncios">
        <?php while($productos = mysqli_fetch_assoc($resultado)): ?>
        <div class="anuncio">

            <img loading="lazy" src="/imagenes/<?php echo $productos['imagen']; ?>" alt="anuncio">

            <div class="contenido-anuncio">
                <h3><?php echo $productos['NombreProducto']; ?></h3>
                <p><?php echo $productos['descripcion']; ?></p>
                <p class="precio">$<?php echo $productos['precio']; ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p><?php echo $productos['domicilios']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p><?php echo $productos['ubicacion']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p><?php echo $productos['habitaciones']; ?></p>
                    </li>
                </ul>

                <a href="anuncio.php?id=<?php echo $productos['id']; ?>" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div><!--.contenido-anuncio-->
        </div><!--anuncio-->
        <?php endwhile; ?>
    </div> <!--.contenedor-anuncios-->

<?php 

    // Cerrar la conexión
    mysqli_close($db);
?>