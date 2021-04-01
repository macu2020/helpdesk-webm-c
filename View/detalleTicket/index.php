<?php 
	require_once "../../Config/conexion.php";
	if (isset($_SESSION['usu_id'])) {
	
 ?>

<!DOCTYPE html>
<html>
<?php require_once "../main/mainheader.php"; ?>
	<title>WebM@c-Helpdesk::Detalle Ticket</title>


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
							<h3 id="lblnomidticket" ></h3>
							<div id="lblestado" ></div>
							<span class="label label-pill label-primary" id="lblnomusuario"></span>
							<span class="label label-pill label-default" id="lblfechcrea"></span>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Detalle Tickets</li>
							</ol>
						</div>
					</div>
				</div>
			</header>


			<div class="box-typical box-typical-padding">
				<div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label for="cat_nom" class="form-label semibold">Categoria</label>
							<input type="text" class="form-control" id="cat_nom" name="cat_nom"  readonly>
						</fieldset>
					</div>

					<div class="col-lg-6">
						<fieldset class="form-group">
							<label for="tick_titulo" class="form-label semibold">Titulo</label>
							<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" readonly>
						</fieldset>						
					</div>

					<div class="col-lg-12">
						<fieldset class="form-group">
							<label for="tickd_descripusu" class="form-label semibold">Descripcion</label>
							
							<div class="summernote-theme-1">
								<textarea name="tickd_descripusu" id="tickd_descripusu" class="summernote"></textarea>
							</div>

						</fieldset>							
					</div>
				</div>
			</div>

			<section class="activity-line" id="lbldetalle">		
			</section><!--.activity-line-->		


			<div class="box-typical box-typical-padding" id="pnldetalle">
				<p>Ingrese su duda o consulta</p>

 			  	<div class="row">	      
					<div class="col-md-12 col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Descripción</label>
							<div class="summernote-theme-1" >
								<textarea class="summernote" name="ticketd_Descrip" id="ticketd_Descrip"></textarea>
							</div>
						</fieldset>
					</div>
					<div class="col-lg-12">
						<button type="button" id="btnenviar" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
						<button type="button" id="btncerrarticket" class="btn btn-rounded btn-inline btn-warning">Cerrar</button>
					</div>				
			   	</div>
			</div>

		</div>
	</div>
<!-- Conrtenido -->


<?php require_once "../main/jss.php"; ?>
<script src="../detalleTicket/detalleticket.js" ></script>

</body>
</html>
<?php 


	# code...
	}else{
header("Location:".Conectar::ruta()."index.php");
	}
 ?>