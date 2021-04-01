	<?php 
		if ($_SESSION["rol_id"] == 1) {
			
	 ?>
	<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="blue with-sub">            
	            <a href="../Home/index.php">
	            	<span class="glyphicon glyphicon-th"></span>
	            	<span class="lbl">Inicio</span>
	            </a>
	        </li>
	        <li class="blue-dirty">
	            <a href="../NuevoTickets/index.php">
	            	<span class="glyphicon glyphicon-th"></span>
	            	<span class="lbl">Nuevo ticket</span>
	            </a>	        	
	        </li>
	        <li class="blue-dirty">
	            <a href="../ConsultarTickets/index.php">
	            	<span class="glyphicon glyphicon-th"></span>
	            	<span class="lbl">Consulatr Ticket</span>
	            </a>	        	
	        </li>
	    </ul>
	</nav>
	<?php 
}else{
	 ?>

	<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="blue with-sub">            
	            <a href="../Home/index.php">
	            	<span class="glyphicon glyphicon-th"></span>
	            	<span class="lbl">Inicio</span>
	            </a>
	        </li>
	        <li class="blue-dirty">
	            <a href="../MntUsuario/index.php">
	            	<span class="glyphicon glyphicon-th"></span>
	            	<span class="lbl">Mantenimiento Usuario</span>
	            </a>	        	
	        </li>	        
	        <li class="blue-dirty">
	            <a href="../ConsultarTickets/index.php">
	            	<span class="glyphicon glyphicon-th"></span>
	            	<span class="lbl">Consulatr Ticket</span>
	            </a>	        	
	        </li>
	    </ul>
	</nav>
	 <?php
	  }
	   ?>