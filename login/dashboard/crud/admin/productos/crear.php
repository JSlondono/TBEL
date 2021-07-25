
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
    $categorias = '';
    
    // Ejecutar el código después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

       

        $NombreProducto = mysqli_real_escape_string( $db,  $_POST['NombreProducto'] );
        $precio = mysqli_real_escape_string( $db,  $_POST['precio'] );
        $descripcion = mysqli_real_escape_string( $db,  $_POST['descripcion'] );
        $ubicacion = mysqli_real_escape_string( $db,  $_POST['ubicacion'] );
        $domicilio = mysqli_real_escape_string( $db,  $_POST['domicilio'] );
        $categorias = mysqli_real_escape_string( $db,  $_POST['categorias'] );
        $VendedorId = mysqli_real_escape_string( $db,  $_POST['vendedor'] );
        
        $creado = date('Y/m/d');

        // Asignar files hacia una variable
        //$imagen = $_FILES['imagen'];

        //Si se sube el archivo...
    if(isset($_FILES['image']['name'])){
 
 
        //Se guarda la imagen en una variable
        $fileinfo = pathinfo($_FILES['image']['name']);

        //Obtiene la extensión del archivo 
        $extension = $fileinfo['extension'];

        //Si la extensión cumple con la condición se sube, sino no

        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
 	{
        echo 'Unknown image format.';
    }

    //Para JPG y JPEG
    if($extension=="jpg" || $extension=="jpeg" )
    {
        $uploadedfile = $_FILES['image']['tmp_name'];
        $src = imagecreatefromjpeg($uploadedfile);
        list($width,$height)=getimagesize($uploadedfile);
        
        //Establecer parámetros de dimensiones
        $newwidth1=600;
        $newheight1=800;
        $tmp1=imagecreatetruecolor($newwidth1,$newheight1);
                
        imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);

        //new random name        
        $temp = explode(".", $_FILES["image"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
                
        $filename1 = "img/". $newfilename;
                    
        imagejpeg($tmp1,$filename1,100);
        
        imagedestroy($src);
        imagedestroy($tmp1);
        
        
       
    

    

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

        if(!$categorias) {
            $errores[] = 'Define de qué categoría es tu producto';
        }

                

        //if(!$uploadedfile['name'] || $uploadedfile['error'] ) {
       //     $errores[] = 'La Imagen es obligatoria';
        //}

        // Validar por tamaño (1mb máximo)
       // $medida = 12000 * 12000;


       // if($uploadedfile['size'] > $medida ) {
          //  $errores[] = 'La Imagen es muy pesada';
        //}


      
        /** SUBIDA DE ARCHIVOS */

            // Crear carpeta
           // //$carpetaImagenes = '../../imagenes/';

            //if(!is_dir($carpetaImagenes)) {
              //  mkdir($carpetaImagenes);
           // }

            // Generar un nombre único
            //$nombreImagen = md5( uniqid( rand(), true ) ) . ".jpeg";    
    
            

        if(empty($errores)) {
               
            // Insertar en la base de datos
            $query = " INSERT INTO productos (NombreProducto, precio, imagen, descripcion, ubicacion, domicilio, creado, VendedorId, categorias) VALUES ( '$NombreProducto', '$precio', '$filename1', '$descripcion', '$ubicacion', '$domicilio','$creado','$VendedorId', '$categorias') ";
                
            // echo $query;
        
            $resultado = mysqli_query($db, $query);
   }
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
    }
?>

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
                <input type="file" id="imagen" accept="image/jpeg, image/png, image/jpg//" name="image">

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
                <legend>Categorías</legend>

                <select name="categorias">
                <option value="">-- Seleccione --</option>
                    <option name = "categorias" id = "domicilio"  value="Tecnologia">Tecnologia</option>
                    <option name = "categorias" id = "domicilio" value="Alimentos">Alimentos</option>
                    <option name = "categorias" id = "domicilio" value="Herramientas">Herramientas</option>
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