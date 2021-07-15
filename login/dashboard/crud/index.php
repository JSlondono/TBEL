<link rel="stylesheet" href="app.css?v=<?php echo(rand()); ?>" /> <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
<link rel="stylesheet" href="tabla.css?v=<?php echo(rand()); ?>" /> <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Mis productos</title>

<?php 

    // Importar la conexión
    require 'includes/config/database.php';
    $db = conectarDB();

    // Escribir el Query
    $query = "SELECT * FROM productos";

    // Consultar la BD 
    $resultadoConsulta = mysqli_query($db, $query);


    // Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {

            // Eliminar el archivo
            $query = "SELECT imagen FROM productos WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);
            $productos = mysqli_fetch_assoc($resultado);
            
            unlink('../imagenes/' . $productos['imagen']);
    
            // Eliminar la propiedad
            $query = "DELETE FROM productos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                $mensaje = "Su producto se ha borrado correctamente";
                echo "<script>";
                echo "alert('$mensaje');";
                echo "window.location.href = '../';";
                echo "</script>";
                

            }
        }

        
    }

    
?>

    <main class="contenedor seccion">
        <h1>Administrador de productos</h1>
        <?php if( intval( $resultado ) === 1): ?>
            <!--<p class="alerta exito"></p>-->
        <?php elseif( intval( $resultado ) === 2 ): ?>
            <p class="alerta exito">Anuncio Actualizado Correctamente</p>
        <?php elseif( intval( $resultado ) === 3 ): ?>
            <p class="alerta exito">Anuncio Eliminado Correctamente</p>
        <?php endif; ?>

        <a href="../" class="boton boton-volver">Volver</a>
        <a href="../crud/admin/productos/crear.php" class="boton boton-verde">Nuevo producto</a>
        
        <section>
        <div class="table-responsive">
        <table class="propiedades table table-sm table-responsive ">
            <thead>
                <tr class="table-responsive">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php while( $productos = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td scope="col"><?php echo $productos['id']; ?></td>
                    <td scope="col"><?php echo $productos['NombreProducto']; ?></td>
                    <td scope="col">  <img src="imagenes/<?php echo $productos['imagen']; ?>" class="imagen-tabla"> </td>
                    <td scope="col">$ <?php echo $productos['precio']; ?></td>
                    <td scope="col">
                        <form method="POST" class="w-100">

                            <input type="hidden" name="id" value="<?php echo $productos['id']; ?>">

                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        
                        <a href="admin/productos/actualizar.php?id=<?php echo $productos['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
    </div>
           