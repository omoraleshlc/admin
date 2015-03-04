<?php
require_once("../../session_check.php");
require("../../classes/medicos.php");
?>

<!DOCTYPE html>
<html lang="es">
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
                        <h1 class="title">Honorarios Médicos</h1>
                        <p class="description">Reporte de honorarios médicos</p>
                    </div>

                </div>

                <!-- Responsive Table -->
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <div class="panel-options">

                                    <a href="#" data-toggle="panel">
                                        <span class="collapse-icon">&ndash;</span>
                                        <span class="expand-icon">+</span>
                                    </a>

                                    <a href="#" data-toggle="reload">
                                        <i class="fa-rotate-right"></i>
                                    </a>

                                    <a href="#" data-toggle="remove">
                                        &times;
                                    </a>
                                </div>
                            </div>
                            
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-6">
                            
                                        <form role="form" method="post">
                                            <div class="form-group">
                                                <label for="rangoFechas">Escoje el rango de fechas</label>
                                                <input type="text" id="rangoFechas" name="fechas" value="" class="form-control daterange" format-date="YYYY-MM-DD" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="nombreMedico">Escriba el nombre del médico</label>
                                                <input type="text" id="nombreMedico" name="nombreMedico" value="" class="form-control" size="40" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <button type="submit" name="search" class="btn btn-info"><i class="fa-search"></i> Buscar</button>
                                            </div>
                                        </form> 

                                    </div>
                                </div>


                                <?php if ( isset($_POST['search']) ) { ?>


                                    <?php
                                        $devs[0]    = null;
                                        $imp[0]     = null;
                                        $i          = 1;
                                        $ic         = 1;

                                        $medico         = $_POST['nombreMedico'];
                                        $entidad        = $_SESSION['entidad'];

                                        $diaI           = substr($_POST['fechas'], 0, 2);
                                        $mesI           = substr($_POST['fechas'], 3, 2);
                                        $yearI          = substr($_POST['fechas'], 6, 4);
                                        $fechaInicial   = $yearI . '-' . $mesI . '-' . $diaI;

                                        $diaF       = substr($_POST['fechas'], 13, 2);
                                        $mesF       = substr($_POST['fechas'], 16, 2);
                                        $yearF      = substr($_POST['fechas'], 19, 4);
                                        $fechaFinal = $yearF . '-' . $mesF . '-' . $diaF;


                                        global $conn;
                                        $medico = 'HLCJVR';
                                        $query = $conn->prepare("
                                            select * 
                                            from cargosCuentaPaciente 
                                            where entidad = :entidad and 
                                            medico = :medico and 
                                            fecha1 = :fechaInicial and 
                                            fecha1 = :fechaFinal
                                            and
                                            tipoPaciente = 'externo' 
                                            order by folioVenta,fechaCargo,fechaCierre ASC");
                                        $query->execute(array(":entidad" => $entidad, ":medico" => $medico, ":fechaInicial" => $fechaInicial, ":fechaFinal" => $fechaFinal));
                                    ?>

                                    <h4>Pacientes Ambulatorios</h4>
                                    <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                                        <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>FechaCierre</th>
                                                    <th>Folio</th>
                                                    <th>Paciente</th>
                                                    <th>Seguro</th>
                                                    <th>TipoPago</th>    
                                                    <th>StatusCuenta</th>
                                                    <th>Rec/Mov</th>
                                                    <th>Importe</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $row = $query->fetch(); $i++) { ?>
                                                    <tr>
                                                        <td><?php echo $i+=1; ?></td>
                                                        <td><?php echo $row['fechaCierre']; ?></td>
                                                        <td><?php echo $row['folioVenta']; ?></td>
                                                        <td>
                                                            <?php
                                                                $qci = $conn->prepare("
                                                                    Select paciente 
                                                                    From clientesInternos 
                                                                    WHERE entidad = :entidad and 
                                                                    folioVenta = :folioVenta");
                                                                $qci->execute(array(":entidad" => $entidad, ":folioVenta" => $row['folioVenta']));

                                                                for ($ic = 0; $ic = $qci->fetch(); $ic++) {
                                                                    echo $ic['paciente'];
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['seguro']; ?></td>
                                                        <td>
                                                            <?php
                                                                if ($row['naturaleza'] == 'C') {
                                                                    echo 'Normal';
                                                                } else if ($row['naturaleza'] == 'A') {
                                                                    echo 'Devolucion';
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['statusCuenta']; ?>	</td>                                                    
                                                        <td>
                                                            <?php
                                                                if ($row['tipoPaciente'] == 'externo') {
                                                                    echo 'R' . $row1a['numRecibo'];
                                                                } else {
                                                                    echo 'M' . $row['keyCAP'];
                                                                }
                                                            ?>	   
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if ($row['naturaleza'] == 'C') {
                                                                    $imp[0]+=($row['precioVenta'] * $row['cantidad']) + ($row['iva'] * $row['cantidad']);
                                                                    echo '$' . number_format($row['precioVenta'] * $row['cantidad'], 2);
                                                                } else if ($row['naturaleza'] == 'A') {
                                                                    echo '<div class="error">$' . number_format($row['precioVenta'] * $row['cantidad'], 2) . '</div>';
                                                                    $devs[0]+=($row['precioVenta'] * $row['cantidad']) + ($row['iva'] * $row['cantidad']);
                                                                }
                                                            ?>	   
                                                        </td>
                                                    </tr> 
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                        
                                    <?php
                                        $query1 = $conn->prepare("
                                    				select * 
                                    				from cargosCuentaPaciente 
                                    				where entidad = :entidad and 
                                                                    medico = :medico and 
                                                                    fecha1 = :fechaInicial and 
                                                                    fecha1 = :fechaFinal and
                                                                    (tipoPaciente='interno' or tipoPaciente='urgencias')  
                                                                    order by folioVenta,fechaCargo ASC ");
                                        $query1->execute(array(":entidad" => $entidad, ":medico" => $medico, ":fechaInicial" => $fechaInicial, ":fechaFinal" => $fechaFinal));
                                    ?>

                                    
                                    <h4>Pacientes Internos</h4>
                                    
                                    <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">    
                                        <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>MovSis</th>         
                                                    <th>FechaCargo</th>
                                                    <th>Folio</th>
                                                    <th>Paciente</th>
                                                    <th>TipoPago</th>    
                                                    <th>StatusCuenta</th>
                                                    <th>Rec/Mov</th>
                                                    <th>Importe</th>   
                                                    <th>StatusCuenta</th> 
                                                    <th>StatusPago</th>     
                                                    <th>FechaPago</th>      
                                                </tr>                                    
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $myrow = $query1->fetch(); $i++) { ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $myrow['keyCAP']; ?></td>              
                                                        <td>
                                                            <?php
                                                                if ($myrow['fechaCargo'] != NULL) {
                                                                    echo $myrow['fechaCargo'];
                                                                } else {
                                                                    echo '---';
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $myrow['folioVenta']; ?></td>
                                                        <td>
                                                            <?php
                                                                $qci = $conn->prepare("
                                                                            Select paciente 
                                                                            From clientesInternos 
                                                                            WHERE entidad = :entidad and 
                                                                            folioVenta = :folioVenta");
                                                                            $qci->execute(array(":entidad" => $entidad, ":folioVenta" => $myrow['folioVenta']));
                                                                for ($ic = 0; $ic = $qci->fetch(); $ic++) {
                                                                    echo $ic['paciente'];
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            /* if ($myrow['tipoPaciente'] == 'externo') {
                                                              $sSQLtp = "Select tipoPago,numRecibo From cargosCuentaPaciente WHERE entidad='" . $entidad . "'
                                                              and folioVenta='" . $myrow['folioVenta'] . "'
                                                              and gpoProducto=''
                                                              and
                                                              tipoPago!=''
                                                              group by tipoPago
                                                              ";
                                                              $resulttp = mysql_db_query($basedatos, $sSQLtp);
                                                              $aa = NULL;
                                                              while ($myrowtp = mysql_fetch_array($resulttp)) {

                                                              echo $myrowtp['tipoPago'];
                                                              echo '<br>';
                                                              }
                                                              } else {

                                                              $sSQL30 = "Select * From clientes WHERE entidad='" . $entidad . "' and numCliente='" . $myrow['seguro'] . "' ";
                                                              $result30 = mysql_db_query($basedatos, $sSQL30);
                                                              $myrow30 = mysql_fetch_array($result30);

                                                              if ($myrow['cantidadAseguradora'] > 0 and $myrow['cantidadParticular'] > 0) {
                                                              echo 'Particular, ' . $myrow30['nomCliente'];
                                                              } else if ($myrow['cantidadAseguradora'] > 0) {
                                                              echo $myrow30['nomCliente'];
                                                              } else
                                                              if ($myrow['cantidadParticular'] > 0) {

                                                              echo 'Particular';
                                                              }
                                                              } */
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                /* if ($myrow['naturaleza'] == 'C') {
                                                                    echo 'Normal';
                                                                } elseif ($myrow['naturaleza'] == 'A') {
                                                                    echo 'Devolucion';
                                                                } */
                                                            ?>	   
                                                        </td>        
                                                        <td>
                                                            <?php
                                                                /* if ($myrow['tipoPaciente'] == 'externo') {
                                                                    echo 'R' . $myrow1a['numRecibo'];
                                                                } else {
                                                                    echo 'M' . $myrow['keyCAP'];
                                                                } */
                                                            ?>	   
                                                        </td>
                                                        <td>
                                                            <?php
                                                                /* if ($myrow['naturaleza'] == 'C') {
                                                                    $imp[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);
                                                                    echo '$' . number_format($myrow['precioVenta'] * $myrow['cantidad'], 2);
                                                                  } elseif ($myrow['naturaleza'] == 'A') {
                                                                    echo '<div class="error">$' . number_format($myrow['precioVenta'] * $myrow['cantidad'], 2) . '</div>';
                                                                    $devs[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);
                                                                } */
                                                            ?>	   
                                                        </td>        
                                                        <td><?php //echo $myrow1['statusCuenta']; ?></td>  
                                                        <td>
                                                            <?php
                                                            /* if ($myrow1['seguro'] != '' and $myrow1['seguro'] != '0') {
                                                              $sSQLap = "
                                                              SELECT *
                                                              FROM
                                                              facturasAplicadas
                                                              WHERE
                                                              entidad='" . $entidad . "'
                                                              and
                                                              folioVenta='" . $myrow['folioVenta'] . "'

                                                              ";


                                                              $resultap = mysql_db_query($basedatos, $sSQLap);
                                                              $myrowap = mysql_fetch_array($resultap);

                                                              if ($myrowap['statusPago'] == 'pagado') {
                                                              // echo '<p style="color:blue;margin-left:20px;">Pagado</p> ';
                                                              if ($myrow['naturaleza'] == 'C') {
                                                              $imp1[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);

                                                              echo '$' . number_format($myrow['precioVenta'] * $myrow['cantidad'], 2);
                                                              } elseif ($myrow['naturaleza'] == 'A') {
                                                              //echo '<div class="error">$'.number_format($myrow['precioVenta']*$myrow['cantidad'],2).'</div>';
                                                              $devs1[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);
                                                              }
                                                              } elseif ($myrowap['statusPago']) {
                                                              echo $myrowap['statusPago'];
                                                              } else {
                                                              echo '---';
                                                              }
                                                              $tipoPago = 'seguro';
                                                              } else {
                                                              if ($myrow1['statusCuenta'] == 'cerrada') {
                                                              //echo '<p style="color:green;margin-left:20px;">Pagado</p> ';

                                                              if ($myrow['naturaleza'] == 'C') {
                                                              $imp1[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);

                                                              echo '$' . number_format($myrow['precioVenta'] * $myrow['cantidad'], 2);
                                                              } elseif ($myrow['naturaleza'] == 'A') {
                                                              // echo '<div class="error">$'.number_format($myrow['precioVenta']*$myrow['cantidad'],2).'</div>';
                                                              $devs1[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);
                                                              }
                                                              } elseif ($myrow1['statusCuenta']) {
                                                              echo $myrow1['statusCuenta'];
                                                              } else {
                                                              echo '---';
                                                              }
                                                              $tipoPago = 'particular';
                                                              } */
                                                            ?>	  
                                                        </td>
                                                        <td>
                                                            <?php
                                                            /* if ($tipoPago == 'seguro') {
                                                              if ($myrowap['fechaPago']) {
                                                              echo cambia_a_normal($myrowap['fechaPago']);
                                                              } else {
                                                              echo '---';
                                                              }
                                                              } else {
                                                              if ($myrow1['fechaCierre']) {
                                                              echo cambia_a_normal($myrow1['fechaCierre']);
                                                              } else {
                                                              echo '---';
                                                              }
                                                              } */
                                                            ?>
                                                        </td>  
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>                                    
                                    </div>
                                <?php } ?>
                            </div> <!-- end panel-body -->
                        </div> <!-- end panel -->
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