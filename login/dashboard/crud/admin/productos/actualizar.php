<link rel = "stylesheet" href = "../../app.css">
<link rel = "stylesheet" href = "crear.css">

<?php 

    

    
    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    
    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Obtener los datos de la propiedad
    $consulta = "SELECT * FROM productos WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $productos = mysqli_fetch_assoc($resultado);

   
    // Arreglo con mensajes de errores
    $errores = [];

    $NombreProducto = $productos['NombreProducto'];
    $precio = $productos['precio'];
    $descripcion = $productos['descripcion'];
    $ubicacion = $productos['ubicacion'];
    $domicilio = $productos['domicilio'];
    $vendedorId = $productos['vendedorId'];
    $imagenPropiedad = $productos['imagen'];

    // Ejecutar el código después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        //echo "<pre>";
        //var_dump($_POST);
        //echo "</pre>";

        //echo "<pre>";
        //var_dump($_FILES);
        //echo "</pre>";


        $NombreProducto = mysqli_real_escape_string( $db,  $_POST['NombreProducto'] );
        $precio = mysqli_real_escape_string( $db,  $_POST['precio'] );
        $descripcion = mysqli_real_escape_string( $db,  $_POST['descripcion'] );
        $ubicacion = mysqli_real_escape_string( $db,  $_POST['ubicacion'] );
        $domicilio = mysqli_real_escape_string( $db,  $_POST['domicilio'] );
        $creado = date('Y/m/d');

        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if(!$NombreProducto) {
            $errores[] = "Debes añadir un nombre";
        }

        if(!$precio) {
            $errores[] = 'El precio es obligatorio';
        }

        if( strlen( $descripcion ) < 5 ) {
            $errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }

        if(!$ubicacion) {
            $errores[] = 'La ubicación es obligatoria';
        }
        
        if(!$domicilio) {
            $errores[] = 'Debes informar sobre los domicilios';
        }

        
        
        

        // Validar por tamaño (1mb máximo)
        $medida = 1000 * 1000;
        if($imagen['size'] > $medida ) {
            $errores[] = 'La Imagen es muy pesada';
        }


        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";


        // Revisar que el array de errores este vacio

        if(empty($errores)) {

            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';

            /** SUBIDA DE ARCHIVOS */

            if($imagen['name']) {
                // Eliminar la imagen previa

                unlink($carpetaImagenes . $productos['imagen']);

                // // Generar un nombre único
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                // // Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );
            } else {
                $nombreImagen = $productos['imagen'];
            }

            // Insertar en la base de datos
            $query = "UPDATE productos SET NombreProducto = '${NombreProducto}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', ubicacion = '${ubicacion}', domicilio = '${domicilio}' WHERE id = ${id} ";
            $resultado = mysqli_query($db, $query);

            
        }

   


    }


   
?>

    <main class="contenedor seccion">
        <h1>Actualizar productos</h1>

        <a href="../../index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="NombreProducto">Nombre del producto:</label>
                <input type="text" id="titulo" name="NombreProducto" placeholder="Nombre Producto" value="<?php echo $NombreProducto; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio del producto" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="../../imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Producto</legend>

                <label for="ubicacion">ubicacion:</label>
                <input 
                    type="text" 
                    id="habitaciones" 
                    name="ubicacion" 
                    placeholder="Medellin, Antioquia" 
                     
                    value="<?php echo $ubicacion; ?>">

                    <label for = "domicilio">¿Domicilios?</label>
                    <select name="domicilio">
                    <option value="">-- Seleccione --</option>
                    <option name = "domicilio" id = "domicilio" value="Si">Si</option>
                    <option name = "domicilio" id = "domicilio"  value="No">No</option>

                               
            </fieldset>

            
            <input type="submit" value="Actualizar producto" class="boton boton-verde">
        </form>
        
    </main>

