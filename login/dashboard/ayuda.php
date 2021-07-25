<?php
session_start();

if ($_SESSION["s_usuario"] === null) {
	header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ayuda</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

				<h1 class="app-page-title">Centro de ayuda</h1>
				<div class="app-card app-card-accordion shadow-sm mb-4">
					<div class="app-card-header p-4 pb-2  border-0">
						<h4 class="app-card-title">Producto</h4>
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4 pt-0">
						<div id="faq1-accordion" class="faq1-accordion faq-accordion accordion">

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq1-heading-1">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq1-1" aria-expanded="false" aria-controls="faq1-1">
										¿Por qué registrarme?
									</button>
								</h2>
								<div id="faq1-1" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-1">
									<div class="accordion-body text-start p4">
										Registrarse con nosotros tiene una serie de grandes beneficios. Podrás pautar tus productos o servicios a los usuarios mas cercanos a tu localidad, tendrás las mejores promociones del momento, y estarás actualizado de todo lo que ocurre en el sitio web.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq1-heading-2">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq1-2">
										¿Qué cantidad de productos o servicios puedo registrar?
									</button>
								</h2>
								<div id="faq1-2" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-2">
									<div class="accordion-body text-start p4">
										Puedes registrar en nuestro sitio web, una cantidad ilimitada de productos y servicios, nosotros te damos las herramientas la meta la pones tu.
									</div>
								</div>
							</div>
							<!--//accordion-item-->


							<div class="accordion-item">
								<h2 class="accordion-header" id="faq1-heading-3">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq1-3" aria-expanded="false" aria-controls="faq1-3">
										¿Debo de pagar comisión por venta?
									</button>
								</h2>
								<div id="faq1-3" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-3">
									<div class="accordion-body text-start p4">
										Solo pagas por pautar y mostrar tus productos o servicios en nuestro sitio web, las ganancias de las ventas son 100% para ti.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq1-heading-4">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq1-4" aria-expanded="false" aria-controls="faq1-4">
										¿Debo pagar la pauta por cada producto?
									</button>
								</h2>
								<div id="faq4" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-4">
									<div class="accordion-body text-start p4">
										Registras tu negocio y pagas la pauta por el negocio, esto te permite mostrar todos tus productos en tu espacio en la plataforma web.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq1-heading-5">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq1-5" aria-expanded="false" aria-controls="faq1-5">
										¿Voy a tener reportes de mis ventas?
									</button>
								</h2>
								<div id="faq1-5" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-5">
									<div class="accordion-body text-start p4">
										Si, la plataforma cuenta con la tecnologia necesaria para llevar a cabo reportes por ventas, visitas, likes, entre otros. Estos reportes solo los puede ver el administrador o dueño de del negocio, en su panel de administrador. Podrás imprimir o compartir estos reportes las veces que sean necesarios y sin costo adicional.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq1-heading-6">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq1-6" aria-expanded="false" aria-controls="faq1-6">
										¿Con qué frecuencia puedo ver o solicitar mis reportes?
									</button>
								</h2>
								<div id="faq1-6" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-6">
									<div class="accordion-body text-start p4">
										Puedes tener informes en el momento que los necesites por horas, dias, semanas o meses y puedes acceder a ellos las 24 hrs del dia.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

						</div>
						<!--//faq1-accordion-->
					</div>
					<!--//app-card-body-->
				</div>
				<!--//app-card-->
				<div class="app-card app-card-accordion shadow-sm mb-4">
					<div class="app-card-header p-3">
						<h4 class="app-card-title">Cuenta</h4>
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4 pt-0">
						<div id="faq2-accordion" class="faq2-accordion faq-accordion accordion">
							<div class="accordion-item">
								<h2 class="accordion-header" id="faq2-heading-1">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-1" aria-expanded="false" aria-controls="faq2-1">
										¿Puedo asignar varios administradores?
									</button>
								</h2>
								<div id="faq2-1" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-1">
									<div class="accordion-body text-start p4">
										Si, puedes tener los administradores que necesites y tu puedes dar los permisos para cada administrador.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq2-heading-2">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2-2">
										¿Cómo recuperar mi contraseña?
									</button>
								</h2>
								<div id="faq2-2" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-2">
									<div class="accordion-body text-start p4">
										En caso de que pierdas o se te olvide tu contraseña, en el apartado de reestablecer contraseña lo puedes llevar a cabo. A tu correo electrónico asociado llegará un mensaje con los pasos a seguir para restablecerla con facilidad.
									</div>
								</div>
							</div>
							<!--//accordion-item-->


							<div class="accordion-item">
								<h2 class="accordion-header" id="faq2-heading-3">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-3" aria-expanded="false" aria-controls="faq2-3">
										¿Puedo personalizar mi perfil?
									</button>
								</h2>
								<div id="faq2-3" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-3">
									<div class="accordion-body text-start p4">
										Puedes personalizar tu perfil a tu gusto, la derscripcion de tu negocio y productos, entre mejor imagen tengas, a más clientes llegarás.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq2-heading-4">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-4" aria-expanded="false" aria-controls="faq2-4">
										¿Me pueden bloquear mi cuenta?
									</button>
								</h2>
								<div id="faq4" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-4">
									<div class="accordion-body text-start p4">
										La cuenta sera bloqueada si no cumples con las normas de netiqueta, o subes contenido hostil y engañoso.
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq2-heading-5">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-5" aria-expanded="false" aria-controls="faq5">
										¿Puedo tener varias cuentas?
									</button>
								</h2>
								<div id="faq2-5" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-5">
									<div class="accordion-body text-start p4">
										Solo se admite tener una cuenta principal por negocio y en esta cuenta se pueden tener varias subcuentas administradoras para la gestion, sin embargo, si cuentas con más de un negocio, podrás hacerte cargo de multicuentas.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

						</div>
						<!--//faq2-accordion-->
					</div>
					<!--//app-card-body-->
				</div>
				<!--//app-card-->
				<div class="app-card app-card-accordion shadow-sm mb-4">
					<div class="app-card-header p-3">
						<h4 class="app-card-title">Metodos de pago</h4>
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4 pt-0">
						<div id="faq3-accordion" class="faq3-accordion faq-accordion accordion">
							<div class="accordion-item">
								<h2 class="accordion-header" id="faq3-heading-1">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq3-1" aria-expanded="false" aria-controls="faq3-1">
										¿Por dónde puedo pagar?
									</button>
								</h2>
								<div id="faq3-1" class="accordion-collapse collapse border-0" aria-labelledby="faq3-heading-1">
									<div class="accordion-body text-start p4">
										Por medio de tarjeta de credito/debito, paypal, payu, pse, efecty, nequi, baloto, GANA y pago contra entrega.
									</div>
								</div>
							</div>
							<!--//accordion-item-->

							<div class="accordion-item">
								<h2 class="accordion-header" id="faq3-heading-2">
									<button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq3-2">
										¿Si uso tarjeta de credito hay cobros adicionales?
									</button>
								</h2>
								<div id="faq3-2" class="accordion-collapse collapse border-0" aria-labelledby="faq3-heading-2">
									<div class="accordion-body text-start p4">
										Solo apareceran los cargos generados por tu entidad bancaria
									</div>
								</div>
							</div>
							<!--//accordion-item-->

						</div>
						<!--//faq3-accordion-->
					</div>
					<!--//app-card-body-->
				</div>
				<!--//app-card-->

				<div class="row g-4">
					<div class="col-12 col-md-6">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
							<div class="app-card-header p-3 border-bottom-0">
								<div class="row align-items-center gx-3">
									<div class="col-auto">
										<div class="app-icon-holder icon-holder-mono">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z" />
												<path d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z" />
												<path fill-rule="evenodd" d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z" />
												<path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z" />
											</svg>
										</div>
										<!--//icon-holder-->

									</div>
									<!--//col-->
									<div class="col-auto">
										<h4 class="app-card-title">Soporte Tecnico</h4>
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body px-4">

								<div class="intro mb-3">Si presenta algun problema con la plataforma no dude en comunicarse con nosotros</div>
								<ul class="list-unstyled">
									<li><strong>Telefono:</strong> 0800 1234 5678</li>
									<li><strong>Email:</strong> <a href="#">support@tubarrioenlinea.com</a></li>
								</ul>
							</div>
							<!--//app-card-body-->
							<div class="app-card-footer p-4 mt-auto">
								<a class="btn app-btn-secondary" href="#">Iniciar chat en vivo</a>
							</div>
							<!--//app-card-footer-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
					<div class="col-12 col-md-6">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
							<div class="app-card-header p-3 border-bottom-0">
								<div class="row align-items-center gx-3">
									<div class="col-auto">
										<div class="app-icon-holder icon-holder-mono">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-life-preserver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M14.43 10.772l-2.788-1.115a4.015 4.015 0 0 1-1.985 1.985l1.115 2.788a7.025 7.025 0 0 0 3.658-3.658zM5.228 14.43l1.115-2.788a4.015 4.015 0 0 1-1.985-1.985L1.57 10.772a7.025 7.025 0 0 0 3.658 3.658zm9.202-9.202a7.025 7.025 0 0 0-3.658-3.658L9.657 4.358a4.015 4.015 0 0 1 1.985 1.985l2.788-1.115zm-8.087-.87L5.228 1.57A7.025 7.025 0 0 0 1.57 5.228l2.788 1.115a4.015 4.015 0 0 1 1.985-1.985zM8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-5a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
											</svg>
										</div>
										<!--//icon-holder-->

									</div>
									<!--//col-->
									<div class="col-auto">
										<h4 class="app-card-title">Quiero actualizar mi plan</h4>
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body px-4">

								<div class="intro mb-3">Quiere mejorar su plan o registrar otro negocio</div>
								<ul class="list-unstyled">
									<li>
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
										</svg>
										Mejora mi plan.
									</li>
									<li>
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
										</svg>
										Cambiar nombre de negocio.
									</li>
									<li>
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
										</svg>
										Registrar otro negocio.
									</li>

								</ul>
							</div>
							<!--//app-card-body-->
							<div class="app-card-footer p-4 mt-auto">
								<a class="btn app-btn-primary" href="#">Actualice ahora</a>
							</div>
							<!--//app-card-footer-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
				</div>
				<!--//row-->

			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-content-->

		<!--llamar el footer-->
		<?php require_once 'includ/footer.php' ?>

	</div>
	<!--//app-wrapper-->


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

</body>

</html>