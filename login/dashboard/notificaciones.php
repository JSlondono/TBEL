<?php
session_start();

if ($_SESSION["s_usuario"] === null) {
	header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Notificaciones</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
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
				<div class="position-relative mb-3">
					<div class="row g-3 justify-content-between">
						<div class="col-auto">
							<h1 class="app-page-title mb-0">Notificaciones</h1>
						</div>
						<div class="col-auto">
							<div class="page-utilities">
								<select class="form-select form-select-sm w-auto">
									<option selected value="option-1">Todas</option>
									<option value="option-2">Noticias</option>
									<option value="option-3">Informe</option>
									<option value="option-4">Mensajes</option>
									<option value="option-4">Facturación</option>
								</select>
							</div>
							<!--//page-utilities-->
						</div>
					</div>
				</div>

				<div class="app-card app-card-notification shadow-sm mb-4">
					<div class="app-card-header px-4 py-3">
						<div class="row g-3 align-items-center">
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
							</div>
							<!--//col-->
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<div class="notification-type mb-2"><span class="badge bg-info">Mensaje</span></div>
								<h4 class="notification-title mb-1">¡Marta Ocampo ha comprado tu producto!</h4>

								<ul class="notification-meta list-inline mb-0">
									<li class="list-inline-item">Hace 2 horas</li>
									<li class="list-inline-item">|</li>
									<li class="list-inline-item">Marta Ocampo</li>
								</ul>

							</div>
							<!--//col-->
						</div>
						<!--//row-->
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4">
						<div class="notification-content">Se ha generado un informe de compra realizado por Marta Ocampo.</div>
					</div>
					<!--//app-card-body-->
					<div class="app-card-footer px-4 py-3">
						<a class="action-link" href="#">Ver Todo<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg></a>
					</div>
					<!--//app-card-footer-->
				</div>
				<!--//app-card-->

				<div class="app-card app-card-notification shadow-sm mb-4">
					<div class="app-card-header px-4 py-3">
						<div class="row g-3 align-items-center">
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<div class="app-icon-holder">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
										<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
									</svg>
								</div>
								<!--//app-icon-holder-->
							</div>
							<!--//col-->
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<div class="notification-type mb-2"><span class="badge bg-warning">Facturación</span></div>
								<h4 class="notification-title mb-1">Factura 25/02/2021</h4>

								<ul class="notification-meta list-inline mb-0">
									<li class="list-inline-item">Hace 1 dia</li>
									<li class="list-inline-item">|</li>
									<li class="list-inline-item">Sistema</li>
								</ul>

							</div>
							<!--//col-->
						</div>
						<!--//row-->
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4">
						<div class="notification-content">¡Tu pago se ha realizado con éxito!</div>
					</div>
					<!--//app-card-body-->
					<div class="app-card-footer px-4 py-3">
						<a class="action-link" href="#">Ver la factura<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg></a>
					</div>
					<!--//app-card-footer-->
				</div>
				<!--//app-card-->

				<div class="app-card app-card-notification shadow-sm mb-4">
					<div class="app-card-header px-4 py-3">
						<div class="row g-3 align-items-center">
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<div class="app-icon-holder icon-holder-mono">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
									</svg>
								</div>
								<!--//app-icon-holder-->
							</div>
							<!--//col-->
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<div class="notification-type mb-2"><span class="badge bg-info">Informe</span></div>
								<h4 class="notification-title mb-1">Informe de ventas</h4>

								<ul class="notification-meta list-inline mb-0">
									<li class="list-inline-item">Hace 3 días</li>
									<li class="list-inline-item">|</li>
									<li class="list-inline-item">Sistema</li>
								</ul>

							</div>
							<!--//col-->
						</div>
						<!--//row-->
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4">
						<div class="notification-content">Tus ventas aumentaron en un 25% en los ultimos 15 días</div>
					</div>
					<!--//app-card-body-->
					<div class="app-card-footer px-4 py-3">
						<a class="action-link" href="#">Ver informe<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg></a>
					</div>
					<!--//app-card-footer-->
				</div>
				<!--//app-card-->

				<div class="app-card app-card-notification shadow-sm mb-4">
					<div class="app-card-header px-4 py-3">
						<div class="row g-3 align-items-center">
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<img class="profile-image" src="assets/images/profiles/profile-2.png" alt="">
							</div>
							<!--//col-->
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<div class="notification-type mb-2"><span class="badge bg-secondary">Mensaje</span></div>
								<h4 class="notification-title mb-1">Fernando Suarez te ha enviado un mensaje</h4>

								<ul class="notification-meta list-inline mb-0">
									<li class="list-inline-item">Hace 7 dias</li>
									<li class="list-inline-item">|</li>
									<li class="list-inline-item">Fernando Suarez</li>
								</ul>

							</div>
							<!--//col-->
						</div>
						<!--//row-->
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4">
						<div class="notification-content">Buenos dias señores tu barrio en linea, la presente es para agradecerles por el servicio prestado la semana pasada, me enviaron todo lo que pedi en muy buen estado</div>
					</div>
					<!--//app-card-body-->
					<div class="app-card-footer px-4 py-3">
						<a class="action-link" href="#">Ver Todo<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg></a>
					</div>
					<!--//app-card-footer-->
				</div>
				<!--//app-card-->


				<div class="app-card app-card-notification shadow-sm mb-4">
					<div class="app-card-header px-4 py-3">
						<div class="row g-3 align-items-center">
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<img class="profile-image" src="assets/images/profiles/profile-3.png" alt="">
							</div>
							<!--//col-->
							<div class="col-12 col-lg-auto text-center text-lg-start">
								<div class="notification-type mb-2"><span class="badge bg-success">Noticias</span></div>
								<h4 class="notification-title mb-1">Sara te compartio una noticia</h4>

								<ul class="notification-meta list-inline mb-0">
									<li class="list-inline-item">Hace 7 días</li>
									<li class="list-inline-item">|</li>
									<li class="list-inline-item">Sara Corrales</li>
								</ul>

							</div>
							<!--//col-->
						</div>
						<!--//row-->
					</div>
					<!--//app-card-header-->
					<div class="app-card-body p-4">
						<div class="notification-content">Estimado señor gerente de tu barrio en linea le informo que apartir de la fecha 14/07/2021,
							contamos con envío gratuito para nuestros clientes de TBEL </div>
					</div>
					<!--//app-card-body-->
					<div class="app-card-footer px-4 py-3">
						<a class="action-link" href="#">Lee más<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg></a>
					</div>
					<!--//app-card-footer-->
				</div>
				<!--//app-card-->





				<div class="text-center mt-4"><a class="btn app-btn-secondary" href="#">Leer más notificaciones</a></div>

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