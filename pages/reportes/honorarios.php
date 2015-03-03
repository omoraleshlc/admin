<?php require_once("../../session_check.php"); require("../../classes/medicos.php");?>
<?php
#iniciando variables


?>
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
                        <h1 class="title">Honorarios Médicos</h1>
                        <p class="description">Reporte de honorarios médicos</p>
                    </div>
                    
                </div>
                
                <!-- Responsive Table -->
                <div class="row">
                    <div class="col-md-12">
                        
                        
                        
                        
                        
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">                        
                                
                                
                                <form role="form" class="form-horizontal" method="post">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="field-1">Escoje el rango de fechas</label>

                                        <div class="col-sm-2">

                                            <input type="text" id="field-1" name="fechas" value="" class="form-control daterange" />

                                        </div>
                                        
                                        <br><br>
                                         <label class="col-sm-2 control-label" for="field-1">Escriba el nombre del médico</label>
                                        
                                         <div class="col-sm-2">
                                            <input name="nomMedico" type="text" value="" size="40" />
                                            <input name="medico" type="hidden" value="<?php echo $_POST['medico']; ?>" size="40" />                                        
                                        </div>
                                    
                                    

                                         <br><br><br>
                                 <div class="col-sm-2">
                                        <button type="submit" name="enviarDatos" value="Enviar" class="btn btn-blue">Buscar</button>
                                        <button type="reset" class="btn btn-white">Reset</button>
                                 </div>
                                </form>                        
                            </div>
                        </div>

                        
                        
                        
                        
                        
                        
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Médicos (Pacientes Ambulatorios)</h3>
                                
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
                            
                            
                            
<?php

$devs[0]=null;
$imp[0]=null;
$i=1;
$ic=1;

$medico=$_POST['nomMedico'];    
$entidad=$_SESSION['entidad'];
$diaI=substr($_POST['fechas'],0,2);
$mesI=substr($_POST['fechas'],3,2);
$yearI=substr($_POST['fechas'],6,4);
$fechaInicial=$yearI.'-'.$mesI.'-'.$diaI;


$diaF=substr($_POST['fechas'],13,2);
$mesF=substr($_POST['fechas'],16,2);
$yearF=substr($_POST['fechas'],19,4);
$fechaFinal=$yearF.'-'.$mesF.'-'.$diaF;


//$medicos=new medicos();
//$hmedicos->selectMedico($_SESSION['entidad'],$fechaInicial,$fechaFinal,$basedatos);




global $conn;
/*
        try {

             $stmt = $conn->prepare("
				select * 
				from cargosCuentaPaciente 
				where entidad = :entidad and 
                                medico = :medico and 
                                fecha1 = :fechaInicial and 
                                fecha1 = :fechaFinal" );

            $stmt->execute(array(":entidad" => $entidad,":medico" => $medico,":fechaInicial" => $fechaInicial,":fechaFinal" => $fechaFinal));
            
            $results = $stmt->fetchAll(PDO::FETCH_OBJ);
            while ($row = $results->stmt()) {
            printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
            }
            if ($results) {

                $this->map($results[0]);

                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'ERROR: - medicos.php|selectMedico' . $e->getMessage();
        }*/
        
        
        
        
$medico='HLCJVR';   


$query = $conn->prepare("
				select * 
				from cargosCuentaPaciente 
				where entidad = :entidad and 
                                medico = :medico and 
                                fecha1 = :fechaInicial and 
                                fecha1 = :fechaFinal" );
 
 
 $query->execute(array(":entidad" => $entidad,":medico" => $medico,":fechaInicial" => $fechaInicial,":fechaFinal" => $fechaFinal));
     
      /*for($i=0; $row = $query->fetch(); $i++){
        echo $i." - ".$row['descripcionMedico']."<br/>";
      }*/

   
        
        
       
?>
                            
                            <?php if($_POST['enviarDatos']!=''){?>
                            <div class="panel-body">
                                
                                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                                
                                    <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                        <thead>
                                    <tr>
                                    <th >
                                        <div align="left">#</div>
                                    </th>


                                    <th  >
                                    <div align="left">FechaCierre</div>
                                    </th>

                                    <th  >
                                    <div align="left">Folio</div>
                                    </th>
                                    
                                    <th >
                                    <div align="left">Paciente</div>
                                    </th>

                                    <th  >
                                    <div align="left">Seguro</div>
                                    </th>

                                    <th ><div align="left" >TipoPago</div></th>    
                                    <!--<th width="60" ><div align="left" >TipoCobro</div></th>-->
                                    <th  ><div align="left" >StatusCuenta</div></th>
                                    <th  ><div align="left" >Rec/Mov</div></th>

                                    <th  ><div align="right" >Importe</div></th>  
                                    </tr>
                                        </thead>
                                        
                                        
                                        
                                        <tbody>
                                            
                                            <?php for($i=0; $row = $query->fetch(); $i++){ ?>
                                            <tr>
                                                
                                                
                                                <td><?php echo $i+=1;?></td>
                                                
                                                <td><?php echo $row['fechaCierre'];?></td>
                                                
                                                <td><?php echo $row['folioVenta'];?></td>
                                                
                                                <td>
                                                <?php
                                                $qci = $conn->prepare("
                                                Select paciente From clientesInternos WHERE entidad = :entidad and folioVenta = :folioVenta");

                                                $qci->execute(array(":entidad" => $entidad, ":folioVenta" => $row['folioVenta']));

                                                for ($ic = 0; $ic = $qci->fetch(); $ic++) {
                                                    echo $ic['paciente'];
                                                }
                                                ?>
                                                </td>
                                                
                                                <td><?php echo $row['seguro'];?></td>
                                                
                                                
                                                <td   align="left" >
                                                        <?php
                                                        if ($row['naturaleza'] == 'C') {
                                                            echo 'Normal';
                                                        } elseif ($row['naturaleza'] == 'A') {
                                                            echo 'Devolucion';
                                                        }
                                                        ?>	   

                                                    </td>
                                                    
                                                <td align="left" >
                                                        <?php
                                                        echo $row['statusCuenta'];
                                                        ?>	   

                                                    </td>                                                    
                                                    
                                                <td align="left" >
                                                        <?php
                                                        if ($row['tipoPaciente'] == 'externo') {
                                                            echo 'R' . $row1a['numRecibo'];
                                                        } else {
                                                            echo 'M' . $row['keyCAP'];
                                                        }
                                                        ?>	   

                                                    </td>
                                                    
                                                    
                                                <td align="right" >
                                                        <?php
                                                        if ($row['naturaleza'] == 'C') {
                                                            $imp[0]+=($row['precioVenta'] * $row['cantidad']) + ($row['iva'] * $row['cantidad']);

                                                            echo '$' . number_format($row['precioVenta'] * $row['cantidad'], 2);
                                                        } elseif ($row['naturaleza'] == 'A') {
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
                                
                                <script type="text/javascript">
                                // This JavaScript Will Replace Checkboxes in dropdown toggles
                                jQuery(document).ready(function($)
                                {
                                    setTimeout(function()
                                    {
                                        $(".checkbox-row input").addClass('cbr');
                                        cbr_replace();
                                    }, 0);
                                });
                                </script>
                                    
                                
                            </div>
                            <?php } ?>
                            
                        
                        </div>
                    </div>
                </div>
                
              
            </div>
	</div>
            
            
              <?php require_once("../layouts/footer.php"); ?>
            <!-- Page Loading Overlay -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
        </div>
            


    
    
    <?php require_once("../layouts/bottom.php"); ?>

</body>
</html>