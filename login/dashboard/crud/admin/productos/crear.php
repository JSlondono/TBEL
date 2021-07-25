
<link rel ="Stylesheet" href ="crear.css">
<link rel ="Stylesheet" href="../../app.css">

<title>Nuevo producto</title>
<?php 

    
    
    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    
    // Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $NombreProducto = '';
    $precio = '';
    $descripcion = '';
    $ubicacion = '';
    $domicilio = '';
    $VendedorId = '';
    
    // Ejecutar el código después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        //echo "<pre>";
        //var_dump($_FILES);
        //echo "</pre>";


        $NombreProducto = mysqli_real_escape_string( $db,  $_POST['NombreProducto'] );
        $precio = mysqli_real_escape_string( $db,  $_POST['precio'] );
        $descripcion = mysqli_real_escape_string( $db,  $_POST['descripcion'] );
        $ubicacion = mysqli_real_escape_string( $db,  $_POST['ubicacion'] );
        $domicilio = mysqli_real_escape_string( $db,  $_POST['domicilio'] );
        $VendedorId = mysqli_real_escape_string( $db,  $_POST['vendedor'] );
        
        $creado = date('Y/m/d');

        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];



        if(!$NombreProducto) {
            $errores[] = "Debes añadir un nombre";
        }

        if(!$precio) {
            $errores[] = 'El precio es obligatorio';
        }

        if( strlen( $descripcion ) < 10 ) {
            $errores[] = 'La descripción es obligatoria y debe tener al menos 10 caracteres';
        }

        if(!$ubicacion) {
            $errores[] = 'La ubicación es obligatoria';
        }
        
        if(!$domicilio) {
            $errores[] = 'Define si cuentas con un sistema de domicilios';
        }

                

        if(!$imagen['name'] || $imagen['error'] ) {
            $errores[] = 'La Imagen es Obligatoria';
        }

        // Validar por tamaño (1mb máximo)
        $medida = 4000 * 4000;


        if($imagen['size'] > $medida ) {
            $errores[] = 'La Imagen es muy pesada';
        }


      
        /** SUBIDA DE ARCHIVOS */

            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpeg";    
    

            



        if(empty($errores)) {
               
            // Insertar en la base de datos
            $query = " INSERT INTO productos (NombreProducto, precio, imagen, descripcion, ubicacion, domicilio, creado, VendedorId) VALUES ( '$NombreProducto', '$precio', '$nombreImagen', '$descripcion', '$ubicacion', '$domicilio','$creado','$VendedorId') ";
                
            // echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al usuario.
                $mensaje = "Su producto se ha registrado correctamente";
                echo "<script>";
                echo "alert('$mensaje');";  
                header('Location: ../../?resultado=1');
                echo "</script>";
                /*header('Location: /');*/
            }
        }
    }

    
?>
>

    <main class="contenedor">
        <h1><b>Añadir productos</b></h1>

        

        <a href="../../" class="boton boton-volver">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/final/login/dashboard/crud/admin/productos/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="NombreProducto">Nombre del producto:</label>
                <input type="text" id="NombreProducto" name="NombreProducto" placeholder="Nombre de su producto" value="<?php echo $NombreProducto; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Producto" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="ubicacion">Ubicación:</label>
                <input 
                    type="text" 
                    id="ubicacion" 
                    name="ubicacion" 
                    placeholder="Medellín, Antioquia" 
                    
                    value="<?php echo $ubicacion; ?>">


            <fieldset>
                <legend>¿Domicilios?</legend>

                <select name="domicilio">
                    
                    <option name = "domicilio" id = "domicilio"  value="No">No</option>
                    <option name = "domicilio" id = "domicilio" value="Si">Si</option>
        </select>
                                
                

            </fieldset>

            <fieldset>
                <legend>Nombre de su negocio</legend>

                <select name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <?php while($vendedor =  mysqli_fetch_assoc($resultado) ) : ?>
                        <option  <?php echo $VendedorId === $vendedor['id'] ? 'selected' : ''; ?>   value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['NombreNegocio'] ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>
       <input type="submit" value="Crear Producto" class="boton boton-verde">
        </form>
        
    </main>


