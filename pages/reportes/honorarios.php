<?php require_once("../../session_check.php"); require("../../classes/medicos.php");?>
<?php
#iniciando variables


?>


<script src="../js/scripts/autocomplete.js" type="text/javascript"></script>
	<link rel="stylesheet" href="../js/stylesheets/autocomplete.css" type="text/css" />
        
        
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
                                
                                
                                <form role="form" class="form-horizontal" method="post">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="field-1">Escoje el rango de fechas</label>

                                        <div class="col-sm-2">

                                            <input type="text" id="field-1" name="fechas" value="" class="form-control daterange" format-date="YYYY-MM-DD" />

                                        </div>
                                        
                                        <br><br>
                                         <label class="col-sm-2 control-label" for="field-1">Escriba el nombre del médico</label>
                                        
                                         <div class="col-sm-2">
                                            <input name="nomMedico" type="text" value="" size="40" />
                                            <input name="medico" type="hidden" value="<?php echo $_POST['medico']; ?>" size="40" />                                        
                                        </div>
                                    
                                    

                                         <br><br><br>
                                 <div class="col-sm-2">
                                        <button type="submit" name="enviarDatos" value="send" class="btn btn-blue">Validate</button>
                                        <button type="reset" class="btn btn-white">Reset</button>
                                 </div>
                                </form>                        
                            </div>
                        </div>

                        
                        
                        
                        
                        
                        
                    
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




global $conn;        
$medico='HLCJVR';   
$query = $conn->prepare("
				select * 
				from cargosCuentaPaciente 
				where entidad = :entidad and 
                                medico = :medico and 
                                fecha1 = :fechaInicial and 
                                fecha1 = :fechaFinal
                                and
                                tipoPaciente='externo' 
                                order by folioVenta,fechaCargo,fechaCierre ASC" ); 
 $query->execute(array(":entidad" => $entidad,":medico" => $medico,":fechaInicial" => $fechaInicial,":fechaFinal" => $fechaFinal));
   
      /*for($i=0; $row = $query->fetch(); $i++){
        echo $i." - ".$row['descripcionMedico']."<br/>";
      }*/

   
        
        
       
?>
                            
                            <?php if($_POST['enviarDatos']!=''){?>
                            <div class="panel-body">
                                
                                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                                <h4>Médicos (Pacientes Ambulatorios)</h4>
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
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                                
<?php
#statement de pacientes internos
$query1 = $conn->prepare("
				select * 
				from cargosCuentaPaciente 
				where entidad = :entidad and 
                                medico = :medico and 
                                fecha1 = :fechaInicial and 
                                fecha1 = :fechaFinal
                                and
                                (tipoPaciente='interno' or tipoPaciente='urgencias')  
                                order by folioVenta,fechaCargo ASC
" );
$query1->execute(array(":entidad" => $entidad,":medico" => $medico,":fechaInicial" => $fechaInicial,":fechaFinal" => $fechaFinal));
?>
                                    
                                    <br>
                                    <h4>Pacientes Internos</h4>
                                    
<table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                        <thead>
<tr >
         
                  <th width="2" >
         <div align="left">#</div>
    </th>

      <th width="2" >
         <div align="left">MovSis</div>
    </th>         
         
         <th width="60" >
         <div align="left">FechaCargo</div>
       </th>
         
       <th width="52" >
         <div align="left">Folio</div>
      </th>
       <th width="490" >
           <div align="left">Paciente</div>
    </th>
    
 <th width="400" ><div align="left" >TipoPago</div></th>    
 <!--<th width="60" ><div align="left" >TipoCobro</div></th>-->
 <th width="66" ><div align="left" >StatusCuenta</div></th>
    <th width="60" ><div align="left" >Rec/Mov</div></th>
   
 <th width="60" ><div align="right" >Importe</div></th>   
 <th width="60" ><div align="right" >StatusCuenta</div></th> 
 <th width="60" ><div align="right" >StatusPago</div></th>     
<th width="60" ><div align="right" >FechaPago</div></th>      
     </tr>                                    
                                        </thead>
                                        
                                        
                                        
                                        <tbody>
                                            
                                         <?php for ($i = 0; $myrow = $query1->fetch(); $i++) { ?>
                        <tr >


                            <td align="left" >
                                <?php
                                echo $i;
                                ?>
                            </td>



                            <td align="left" >
                                <?php
                                echo $myrow['keyCAP'];
                                ?>
                            </td>              



                            <td align="left" >
                                <?php
                                if ($myrow['fechaCargo'] != NULL) {
                                    echo $myrow['fechaCargo'];
                                } else {
                                    echo '---';
                                }
                                ?>
                            </td>


                            <td align="left" >

                                <?php
                                echo $myrow['folioVenta'];
                                ?></td>






                            <td align="left" >
                    <?php
                    $qci = $conn->prepare("
                    Select paciente From clientesInternos WHERE entidad = :entidad and folioVenta = :folioVenta");

                    $qci->execute(array(":entidad" => $entidad, ":folioVenta" => $myrow['folioVenta']));

                    for ($ic = 0; $ic = $qci->fetch(); $ic++) {
                        echo $ic['paciente'];
                    }
                    ?>
                            </td>



                            <td align="left" >
<?php
/*if ($myrow['tipoPaciente'] == 'externo') {
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
}*/
?>
                            </td>




                            <!--    
                        <td align="left" >
<?php
/*if ($myrow['cantidadAseguradora'] > 0) {
echo 'CxC';
}

if ($myrow['cantidadParticular'] > 0) {


if ($myrow['cantidadAseguradora'] > 0) {
echo ',';
}
echo 'Particular';
}*/
?>	   

                                </td>       
                           </td-->      




                            <td   align="left" >
<?php
//echo $myrow['naturaleza'];
/*if ($myrow['naturaleza'] == 'C') {
echo 'Normal';
} elseif ($myrow['naturaleza'] == 'A') {
echo 'Devolucion';
}*/
?>	   

                            </td>        











                            <td align="left" >
<?php
/*if ($myrow['tipoPaciente'] == 'externo') {
echo 'R' . $myrow1a['numRecibo'];
} else {
echo 'M' . $myrow['keyCAP'];
}*/
?>	   

                            </td>





                            <td align="right" >
<?php
/*if ($myrow['naturaleza'] == 'C') {
$imp[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);

echo '$' . number_format($myrow['precioVenta'] * $myrow['cantidad'], 2);
} elseif ($myrow['naturaleza'] == 'A') {
echo '<div class="error">$' . number_format($myrow['precioVenta'] * $myrow['cantidad'], 2) . '</div>';
$devs[0]+=($myrow['precioVenta'] * $myrow['cantidad']) + ($myrow['iva'] * $myrow['cantidad']);
}*/
?>	   

                            </td>        




                            <td align="right" >
                                <?php
                                //echo $myrow1['statusCuenta'];
                                ?>	  
                            </td>  













                            <td align="center" >
<?php
/*if ($myrow1['seguro'] != '' and $myrow1['seguro'] != '0') {
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
}*/
?>	  

                            </td>       












                            <td align="center" >
                                <?php
                                /*if ($tipoPago == 'seguro') {
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
                                }*/
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