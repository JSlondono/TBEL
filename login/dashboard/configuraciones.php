<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Configuraciones</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">

    <!--llamar el header-->
    <?php require_once 'includ/header.php' ?>       
    
    
    <div class="app-wrapper">
        
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">              
                <h1 class="app-page-title">Configuraciones</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">General</h3>
                        <div class="section-intro">Configura los datos de tunegocio y obten reportes exactos para administrar tu negocio. <a href="ayuda.php">Aprende más</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            
                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Nombre del negocio<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
  <circle cx="8" cy="4.5" r="1"/>
</svg></span></label>
                                        <input type="text" class="form-control" id="setting-input-1" placeholder="Tienda Don Juan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Nombre de contacto</label>
                                        <input type="text" class="form-control" id="setting-input-2" placeholder="Nombre completo"required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Email de Negocio</label>
                                        <input type="email" class="form-control" id="setting-input-3" placeholder="ejemplo@gmail.com">
                                    </div>
                                    <button type="submit" class="btn app-btn-primary" >Guardar Cambios</button>
                                </form>
                            </div><!--//app-card-body-->
                            
                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
                <hr class="my-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Plan</h3>
                        <div class="section-intro">Configura los datos de tu plan. <a href="ayuda.php">Aprender más</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            
                            <div class="app-card-body">
                                <div class="mb-2"><strong>Plan Actual:</strong> Oro</div>
                                <div class="mb-2"><strong>Estado:</strong> <span class="badge bg-success">Activo</span></div>
                                <div class="mb-2"><strong>Expira:</strong> 2022-07-21</div>
                                <div class="mb-4"><strong>Facturas:</strong> <a href="#">Vista</a></div>
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <a class="btn app-btn-primary" href="#">Actualizar Plan</a>
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn app-btn-secondary" href="#">Cancelar Plan</a>
                                    </div>
                                </div>
                                    
                            </div><!--//app-card-body-->
                            
                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
                <hr class="my-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Privacidad  de Datos</h3>
                        <div class="section-intro">Configura la privacidad de tus datos </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">                          
                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-1" checked>
                                        <label class="form-check-label" for="settings-checkbox-1">
                                            Mantener el historial de actividad del usuario
                                        </label>
                                    </div><!--//form-check-->
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-2" checked>
                                        <label class="form-check-label" for="settings-checkbox-2">
                                            Mantener las preferencias de busqueda del usuario
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-3">
                                        <label class="form-check-label" for="settings-checkbox-3">
                                            Mantener el historial de compras del usuario
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-4">
                                        <label class="form-check-label" for="settings-checkbox-4">
                                            Mantener el historial de pedidos del usuario
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-5">
                                        <label class="form-check-label" for="settings-checkbox-5">
                                            Mantener el historial de me gusta de un producto
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn app-btn-primary" >Guardar Cambios</button>
                                    </div>
                                </form>
                            </div><!--//app-card-body-->                            
                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
                <hr class="my-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Notificaciones</h3>
                        <div class="section-intro">Configura el estado de tus notificaciones </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">                          
                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="settings-switch-1" checked>
                                        <label class="form-check-label" for="settings-switch-1">Notificaciones del Negocio</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="settings-switch-2">
                                        <label class="form-check-label" for="settings-switch-2">Notificaciones por venta</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="settings-switch-3" checked>
                                        <label class="form-check-label" for="settings-switch-3">Notificaciones de SMS</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="settings-switch-4">
                                        <label class="form-check-label" for="settings-switch-4">Notificaciones de reportes</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="settings-switch-5">
                                        <label class="form-check-label" for="settings-switch-5">Notificaciones por visitas</label>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn app-btn-primary" >Guardar cambios</button>
                                    </div>
                                </form>
                            </div><!--//app-card-body-->                            
                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
                <hr class="my-4">
            </div><!--//container-fluid-->
        </div><!--//app-content-->
        
        <!--llamar el footer-->
        <?php require_once 'includ/footer.php' ?>
        
    </div><!--//app-wrapper-->                      

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 


