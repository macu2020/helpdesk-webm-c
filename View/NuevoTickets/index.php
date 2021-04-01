<?php 
	require_once "../../Config/conexion.php";
	if (isset($_SESSION['usu_id'])) {
	

 ?>

<!DOCTYPE html>
<html>
<?php require_once "../main/mainheader.php"; ?>
	<title>Helpsdesk - Nuevo Ticket</title>


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
							<h3>Nuevo Tickets</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Tickets</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
				Desde esta ventan podra generar nuevos tickets de helpdesk :
				</p>
			<h5 >Ingresar Información</h5>
 		<div class="row">
 			<form action="" method="POST" id="ticket_form">

 	                <input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"];  ?>  ">
 	            <div class="container-fluid">    
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<fieldset class="form-group">
						  <label class="form-label semibold" for="exampleInput">Categoria</label>
							<select name="cat_id" id="cat_id" class="form-control">			
							</select>
						</fieldset>
					</div>
					<div class="col-md-6 col-lg-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Titulo</label>
							<input type="text" class="form-control" name="tick_titulo" id="tick_titulo" placeholder="Ingrese titulo" >
						</fieldset>
					</div>
				</div>
				</div>
					<div class="col-md-12 col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Descripción</label>
							<div class="summernote-theme-1" >
								<textarea class="summernote" name="tick_descrip" id="ticket_Descrip"></textarea>
							</div>
						</fieldset>
					</div>
					<div class="col-lg-12">
						<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">
							Guardar
						</button>
					</div>				
			</form>
		</div>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
 

	 













 
<!-- Conrtenido -->
 

<?php require_once "../main/jss.php"; ?>
<script src="nuevoTickets.js"></script>

</body>
</html>
<?php 


	# code...
	}else{
header("Location:".Conectar::ruta()."index.php");
	}
 ?>