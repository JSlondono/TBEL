<?php
session_start();

if ($_SESSION["s_usuario"] === null) {
	header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Estadísticas</title>

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

				<h1 class="app-page-title">Gráficos</h1>
				<div class="app-card shadow-sm mb-4 border-left-decoration">
					<div class="inner">
						

					</div>
					<!--//inner-->
				</div>
				<!--//app-card-->
				<div class="row g-4 mb-4">
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<div class="app-card-header p-3 border-0">
								<h4 class="app-card-title">Ventas totales</h4>
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-4">
								<div class="chart-container">
									<canvas id="chart-line"></canvas>
								</div>
							</div>
							<!--//app-card-body-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<div class="app-card-header p-3 border-0">
								<h4 class="app-card-title">Click en botón de me gusta/comprar</h4>
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-4">
								<div class="chart-container">
									<canvas id="chart-bar"></canvas>
								</div>
							</div>
							<!--//app-card-body-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<div class="app-card-header p-3 border-0">
								<h4 class="app-card-title">Visitas totales</h4>
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-4">
								<div class="chart-container">
									<canvas id="chart-pie"></canvas>
								</div>
							</div>
							<!--//app-card-body-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<div class="app-card-header p-3 border-0">
								<h4 class="app-card-title">Rango de ventas</h4>
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-4">
								<div class="chart-container">
									<canvas id="chart-doughnut"></canvas>
								</div>
							</div>
							<!--//app-card-body-->
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



	<!-- Charts JS -->
	<script src="assets/plugins/chart.js/chart.min.js"></script>
	<script src="assets/js/charts-demo.js"></script>

	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

</body>

</html>