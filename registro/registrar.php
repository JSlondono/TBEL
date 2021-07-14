<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['NombreNegocio']) >= 1  && strlen($_POST['password']) >= 1) {
	    $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);
	    $NombreNegocio = trim($_POST['NombreNegocio']);
        


	    $consulta = "INSERT INTO vendedores (usuario,password, NombreNegocio) VALUES ('$usuario','$password','$NombreNegocio')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	
			<?php
			header("Location:../login");
			
			?>
			<script> alert("Te has inscrito correctamente")</script>
           <?php

	    } else {
	    	?> 
	    	<script> alert("Este usuario ya se encuentra registrado")</script>
           <?php
	    }
    }   else {
	    	?> 
	    	<script> alert("Por favor llene todos los campos")</script>
           <?php
    }
}

?>

