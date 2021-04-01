<?php 
	require_once "../../Config/conexion.php";
	if (isset($_SESSION['usu_id'])) {
	

 ?>

<!DOCTYPE html>
<html>
<?php 
require_once "../main/mainheader.php";
 ?>
<link rel="stylesheet" href="../../public/css/morris_grafico/morris.css">
	<title>Helpsdesk WebM@c</title>

<body class="with-side-menu">

	<?php 	require_once "header.php";	 ?>

	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once "nav.php"; ?>




<!-- Conrtenido -->
	<div class="page-content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-sm-4">
							<article class="statistic-box green">
								<div>
									<div class="number" id="lbltotal"></div>
									<div class="caption">
										<div>Total de Tickets</div>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="statistic-box yellow">
								<div>
									<div class="number" id="lbltotalabierto"></div>
									<div class="caption">
										<div>Total de Abiertos</div>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="statistic-box red">
								<div>
									<div class="number" id="lbltotalcerrado"></div>
									<div class="caption">
										<div>Total de Cerrados</div>
									</div>
								</div>
							</article>
						</div>
					</div>				
				</div>
			</div>

			<section class="card">
				<header class="card-header">
					Grafico Estadístico
				</header>
				<div class="card-block">
					<div id="divgrafico" style="height: 250px;"></div>
				</div>
			</section>

		</div>
	</div>
<!-- Conrtenido -->
 

<?php require_once "../main/jss.php"; ?>



	<script src="../../public/css/morris_grafico/morris.min.js"></script>
	<script src="../../public/css/morris_grafico/raphael-min.js"></script>
 
<script src="../Home/home.js"></script>

</body>
</html>
<?php 


	# code...
	}else{
header("Location:".Conectar::ruta()."index.php");
	}
 ?>