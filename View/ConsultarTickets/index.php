<?php 
	require_once "../../Config/conexion.php";
	if (isset($_SESSION['usu_id'])) {
	
 ?>

<!DOCTYPE html>
<html>
<?php require_once "../main/mainheader.php"; ?>
 
	<title>Helpsdesk - Consultar Ticket</title>

<body class="with-side-menu">

	<?php 	require_once "../Home/header.php";	 ?>

	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once "../Home/nav.php"; ?>




<!-- Conrtenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Consultar Tickets</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Consultar Tickets</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 5%">Nro. Ticket</th>
							<th style="width: 15%">Categoria</th>
							<th class="d-none d-sm-table-cell" style="width: 40%">Titulo</th>
							<th class="d-none d-sm-table-cell" style="width: 5%">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 10%">Fecha de creacion</th>
							<th class="text-center" style="width: 5%"></th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>

		</div>
	</div>
<!-- Conrtenido -->


<?php require_once "../main/jss.php"; ?>
<script src="../ConsultarTickets/consultarTickets.js" ></script>

</body>
</html>
<?php 


	# code...
	}else{
header("Location:".Conectar::ruta()."index.php");
	}
 ?>