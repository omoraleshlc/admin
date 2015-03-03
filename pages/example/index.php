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

                Here starts everything :D
                
                <?php require_once("../layouts/footer.php"); ?>
            </div>
	</div>
            
            <!-- Page Loading Overlay -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
        
    <?php require_once("../layouts/bottom.php"); ?>

    <!-- Imported scripts on this page -->
    <script src="../../resources/xenon-theme/js/xenon-widgets.js"></script>
    <script src="../../resources/xenon-theme/js/devexpress-web-14.1/js/globalize.min.js"></script>
    <script src="../../resources/xenon-theme/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

</body>
</html>