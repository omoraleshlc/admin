<?php require_once("../../session_check.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("../layouts/head.php"); ?>
</head>

<body class="page-body">

	<div class="page-container">
            
            <?php require_once("../layouts/sidebar.php"); ?>

            <div class="main-content">

                <?php require_once("../layouts/navbar.php"); ?>

                <div class="page-title">
                    <div class="title-env">
                        <h1 class="title">Main Title</h1>
                        <p class="description">Some description</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Button Colors</div>
                            <div class="panel-body">

                                <button class="btn btn-blue"><i class="fa-link"></i> Agregar</button>
                                <button class="btn btn-warning"><i class="fa-link"></i> Actualizar</button>
                                <button class="btn btn-red"><i class="fa-link"></i> Eliminar</button>
                                <button class="btn btn-white"><i class="fa-link"></i> Nuevo</button>
                                <button class="btn btn-black"><i class="fa-link"></i> Cancelar</button>
                                <button class="btn btn-info"><i class="fa-link"></i> Buscar</button>

                            </div>
                        </div>

                    </div>
                </div>

                
                
                <?php require_once("../layouts/footer.php"); ?>
            </div>
	</div>
            
            <!-- Page Loading Overlay -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
        
    <?php require_once("../layouts/bottom.php"); ?>

</body>
</html>