<?php
session_start();

if ($_SESSION["s_usuario"] === null) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pedidos</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Ordenes">
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

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Pedidos</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Buscar..">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Buscar</button>
                                        </div>
                                    </form>

                                </div>
                                <!--//col-->
                                <div class="col-auto">

                                    <select class="form-select w-auto">
                                        <option selected value="option-1">Todos</option>
                                        <option value="option-2">Últimos 7 días</option>
                                        <option value="option-3">Este mes</option>
                                        <option value="option-4">Último trimestre</option>

                                    </select>
                                </div>
                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg> Descargar informe Xls
                                    </a>
                                </div>
                            </div>
                            <!--//row-->
                        </div>
                        <!--//table-utilities-->
                    </div>
                    <!--//col-auto-->
                </div>
                <!--//row-->


                <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Todos</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Pagos</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pendientes</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelados</a>
                </nav>


                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Orden</th>
                                                <th class="cell">Producto</th>
                                                <th class="cell">Vendedor</th>
                                                <th class="cell">Fecha</th>
                                                <th class="cell">Estado</th>
                                                <th class="cell">Total</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">#15346</td>
                                                <td class="cell"><span class="truncate">Estuche Redmi Note 7</span></td>
                                                <td class="cell">John Sanders</td>
                                                <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                                <td class="cell"><span class="badge bg-success">Pagado</span></td>
                                                <td class="cell">$25.200</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>
                                            <tr>
                                                <td class="cell">#15345</td>
                                                <td class="cell"><span class="truncate"> Audifonos bass XL</span></td>
                                                <td class="cell">Dylan Ambrose</td>
                                                <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
                                                <td class="cell"><span class="badge bg-warning">Pendiente</span></td>
                                                <td class="cell">$36.200</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>
                                            <tr>
                                                <td class="cell">#15344</td>
                                                <td class="cell"><span class="truncate">Teatro en casa LG</span></td>
                                                <td class="cell">Teresa Holland</td>
                                                <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
                                                <td class="cell"><span class="badge bg-success">Pagado</span></td>
                                                <td class="cell">$1.223.000</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">#15343</td>
                                                <td class="cell"><span class="truncate">Nevera HACEB de segunda</span></td>
                                                <td class="cell">Jayden Massey</td>
                                                <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
                                                <td class="cell"><span class="badge bg-success">Pagado</span></td>
                                                <td class="cell">$499.000</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">#15342</td>
                                                <td class="cell"><span class="truncate">Nutella 250mg</span></td>
                                                <td class="cell">Reina Brooks</td>
                                                <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
                                                <td class="cell"><span class="badge bg-danger">Cancelado</span></td>
                                                <td class="cell">$15.200</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">#15341</td>
                                                <td class="cell"><span class="truncate">Juego de vasos de vidrio</span></td>
                                                <td class="cell">Raymond Atkins</td>
                                                <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
                                                <td class="cell"><span class="badge bg-success">Pagado</span></td>
                                                <td class="cell">$67.800</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->

                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Siguiente</a>
                                </li>
                            </ul>
                        </nav>
                        <!--//app-pagination-->

                    </div>
                    <!--//tab-pane-->

                    <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                        <div class="app-card app-card-orders-table mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">

                                    <table class="table mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Orden</th>
                                                <th class="cell">Producto</th>
                                                <th class="cell">Vendedor</th>
                                                <th class="cell">Fecha</th>
                                                <th class="cell">Estado</th>
                                                <th class="cell">Total</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">#15346</td>
                                                <td class="cell"><span class="truncate">Estuche Redmi Note 7</span></td>
                                                <td class="cell">John Sanders</td>
                                                <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                                <td class="cell"><span class="badge bg-success">Pagado</span></td>
                                                <td class="cell">$25.200</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">#15344</td>
                                                <td class="cell"><span class="truncate">Teatro en casa LG</span></td>
                                                <td class="cell">Teresa Holland</td>
                                                <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
                                                <td class="cell"><span class="badge bg-success">Pagado</span></td>
                                                <td class="cell">$1.223.000</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">#15343</td>
                                                <td class="cell"><span class="truncate">Nevera HACEB de segunda</span></td>
                                                <td class="cell">Jayden Massey</td>
                                                <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
                                                <td class="cell"><span class="badge bg-success">Pagado</span></td>
                                                <td class="cell">$499.000</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>


                                            <tr>
                                                <td class="cell">#15341</td>
                                                <td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
                                                <td class="cell">Raymond Atkins</td>
                                                <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
                                                <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                <td class="cell">$678.26</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//tab-pane-->

                    <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                        <div class="app-card app-card-orders-table mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Orden</th>
                                                <th class="cell">Producto</th>
                                                <th class="cell">Vendedor</th>
                                                <th class="cell">Fecha</th>
                                                <th class="cell">Estado</th>
                                                <th class="cell">Total</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">#15345</td>
                                                <td class="cell"><span class="truncate"> Audifonos bass XL</span></td>
                                                <td class="cell">Dylan Ambrose</td>
                                                <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
                                                <td class="cell"><span class="badge bg-warning">Pendiente</span></td>
                                                <td class="cell">$36.200</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//tab-pane-->
                    <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
                        <div class="app-card app-card-orders-table mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Orden</th>
                                                <th class="cell">Producto</th>
                                                <th class="cell">Vendedor</th>
                                                <th class="cell">Fecha</th>
                                                <th class="cell">Estado</th>
                                                <th class="cell">Total</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="cell">#15342</td>
                                                <td class="cell"><span class="truncate">Nutella 250mg</span></td>
                                                <td class="cell">Reina Brooks</td>
                                                <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
                                                <td class="cell"><span class="badge bg-danger">Cancelado</span></td>
                                                <td class="cell">$15.200</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//tab-pane-->
                </div>
                <!--//tab-content-->



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