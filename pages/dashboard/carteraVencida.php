<?php require_once("../../session_check.php"); ?>

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

                
                <!--
                <div class="dx-warning hidden">
                    <div>
                        <h2>How to Include Charts Library in Xenon Theme</h2>

                        <p>The reason why you don't see charts like in the Xenon demo website is because of license restrictions from DevExpress company. <a href="http://js.devexpress.com/DevExtremeWeb/?folder=EULAs" target="_blank">Click here</a> to read license agreement.</p>
                        <p>Even that we have purchased the developer license we are not permitted to include the DevExtreme Web Charts JavaScript library in the default download file of Xenon theme, however you can include DevExpress Charts library manually and takes just few minutes:</p>

                        <ol>
                            <li>Download <strong>DevExtreme Web</strong> JavaScript library by clicking <a href="https://go.devexpress.com/DevExpressDownload_DevExtremeWebTrial.aspx" class="text-bold">here</a>. If the link doesn't work, then <a href="http://js.devexpress.com/Buy/" target="_parent"><strong>click this one</strong></a> and choose DevExtreme Web package to download.</li>
                            <li>Extract the downloaded archive. There you will find <strong>Lib/</strong> folder. <strong>Copy</strong> the folders inside.</li>
                            <li><strong>Paste</strong> copied files to <strong>assets/js/devexpress-web-14.1/</strong></li>
                            <li>You are all set! Charts will look the same just like in the demo website.</li>
                        </ol>
                    </div>
                </div>
                -->

              

                
                
                
                
                <h1>ANTIGUEDAD DE SALDOS</h1>    

                
                
                
                
                
                
                
                
                
                
                
                
                
        <div class="row">
            
                  <form method="post" name="enviarcxcv">  
                      
                      
                      
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
                                                       
									<label class="control-label">
                                                                            
                                                                                
                        Apertura <?php
                        $query = $conn->prepare( "Select fechaApertura from entidades
                        WHERE
                        codigoEntidad = :entidad ");


                        $query->execute(array(":entidad" => $_SESSION['entidad']));
                        $myrowp = $query->fetch();
                        echo $myrowp['fechaApertura'];
                        ?>
                      <p class="description">
                        <?php 
                        echo 'Usuario: '.$_SESSION['usuario'].', Impreso el: '.date("d-m-Y H:i:s");
                        ?></p>
                                                                        
                                                                        </label>
									
								
                                                                                                      
                          
<!--  
<?php
$sqlY= "Select * From cont_ejercicio";
$arrayR=mysql_db_query($basedatos,$sqlY); ?>
<select name="yearInicio" class="normal" >
<option value="" >---</option>
<?php while($fetchY = mysql_fetch_array($arrayR)){
?>
<option
<?php
if($_POST['yearInicio'] ==$fetchY['ejercicio']){
echo 'selected="selected"';
}
$ldf='31';?>
value="<?php echo $fetchY['ejercicio']; ?>"><?php echo $fetchY['ejercicio']; ?></option>
<?php } ?>
</select>


                         
                         <select name="mesInicial" class="normal" >
<option
value="">Escoje el Mes</option>
<option
<?php if($_POST['mesInicial']=='01'){echo 'selected=""';}?>
value="01">Enero</option>
<option
<?php if($_POST['mesInicial']=='02')
{echo 'selected=""';}?>
value="02">Febrero</option>
<option
<?php if($_POST['mesInicial']=='03'){echo 'selected=""';}?>
value="03">Marzo</option>
<option
<?php if($_POST['mesInicial']=='04'){echo 'selected=""';}?>
value="04">Abril</option>
<option
<?php if($_POST['mesInicial']=='05'){echo 'selected=""';}?>
value="05">Mayo</option>
<option
<?php if($_POST['mesInicial']=='06'){echo 'selected=""';}?>
value="06">Junio</option>
<option
<?php if($_POST['mesInicial']=='07'){echo 'selected=""';}?>
value="07">Julio</option>
<option
<?php if($_POST['mesInicial']=='08'){echo 'selected=""';}?>
value="08">Agosto</option>
<option
<?php if($_POST['mesInicial']=='09'){echo 'selected=""';}?>
value="09">Septiembre</option>
<option
<?php if($_POST['mesInicial']=='10'){echo 'selected=""';}?>
value="10">Octubre</option>
<option
<?php if($_POST['mesInicial']=='11'){echo 'selected=""';}?>
value="11">Noviembre</option>
<option
<?php if($_POST['mesInicial']=='12'){echo 'selected=""';}?>
value="12">Diciembre</option>
</select>
                         
<span class="label label-info">AL</span>               
-->


  <table cellspacing="0" class="table table-small-font table-stripe">

    <tr>
    <td><?php
$query1 = $conn->prepare( "Select * From cont_ejercicio");
$query1->execute(); ?>
<select name="yearFinal" class="form-control" >
<option value="" >---</options>
<?php while($fetchY = $query1->fetch()){?>
<option
<?php
if($_POST['yearFinal'] ==$fetchY['ejercicio']){
echo 'selected="selected"';
}
$ldf='31';?>
value="<?php echo $fetchY['ejercicio']; ?>"><?php echo $fetchY['ejercicio']; ?></option>
<?php } ?>
</select></td>
    <td><select name="mesFinal" class="form-control" >
<option
value="">Escoje el Mes</option>
<option
<?php if($_POST['mesFinal']=='01'){echo 'selected=""';}?>
value="01">Enero</option>
<option 
<?php if($_POST['mesFinal']=='02')
{echo 'selected=""';}?>
value="02">Febrero</option>
<option
<?php if($_POST['mesFinal']=='03'){echo 'selected=""';}?>
value="03">Marzo</option>
<option
<?php if($_POST['mesFinal']=='04'){echo 'selected=""';}?>
value="04">Abril</option>
<option
<?php if($_POST['mesFinal']=='05'){echo 'selected=""';}?>
value="05">Mayo</option>
<option
<?php if($_POST['mesFinal']=='06'){echo 'selected=""';}?>
value="06">Junio</option>
<option
<?php if($_POST['mesFinal']=='07'){echo 'selected=""';}?>
value="07">Julio</option>
<option
<?php if($_POST['mesFinal']=='08'){echo 'selected=""';}?>
value="08">Agosto</option>
<option
<?php if($_POST['mesFinal']=='09'){echo 'selected=""';}?>
value="09">Septiembre</option>
<option
<?php if($_POST['mesFinal']=='10'){echo 'selected=""';}?>
value="10">Octubre</option>
<option
<?php if($_POST['mesFinal']=='11'){echo 'selected=""';}?>
value="11">Noviembre</option>
<option
<?php if($_POST['mesFinal']=='12'){echo 'selected=""';}?>
value="12">Diciembre</option>
</select></td>
    <td>
        
        
        <div class="form-control btn">
        <button type="submit" class="btn btn-xs" value="Generar Reporte" name="generarReporte">
              Generar Reporte <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
          </button> 
        </div>
    </td>
    <td>
        <div class="form-control btn">
              <button type="submit" class="btn btn-xs" value="Generar Reporte" name="generarReporte">
              Exportar PDF <span class="glyphicon glyphicon-export" aria-hidden="true"></span>
          </button>
        </div>
    </td>
    </tr>
    
</table>




                   



                         




       

    

                                                                 
                                   
                                                             
                                                             
									
								
                                                        </h3>
							
							<div class="panel-options">
								<a href="#">
									<i class="linecons-cog"></i>
								</a>
								
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
							
							<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
							
								
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            

					
				
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            <table cellspacing="0" class="table table-small-font table-bordered table-striped">
									<thead>
										<tr>
											<th>Cliente</th>
										
                                                                                    <th data-priority="3"><div align="left" class="headertablecustom" >-29</div></th>
                                                                                    <th data-priority="1"><div align="left" class="headertablecustom" >30</div></th>
                                                                                    <th data-priority="2"><div align="left" class="headertablecustom" >60</div></th>
                                                                                    <th data-priority="1"><div align="left" class="headertablecustom" >90</div></th>
                                                                                    <th data-priority="2"><div align="left" class="headertablecustom" >120+</div></th>
                                                                                    <th data-priority="3"><div align="left" class="headertablecustom" >Total</div></th>    
										</tr>
									</thead>
									<tbody>
						                                               
<?php #$fechaInicial='2015-01-01';$fechaFinal='2015-05-31';







          
                                        
                                        
                                        

/*   
###SACO EL RANGO DE FECHAS   
$diasInicial = cal_days_in_month(CAL_GREGORIAN, $_POST['mesInicial'], $_POST['yearInicio']); // 31
$fechaInicial=$_POST['yearInicio'].'-'.$_POST['mesInicial'].'-'.$diasInicial;
$fechaInicial = date_create($fechaInicial);
date_sub($fechaInicial, date_interval_create_from_date_string('120 days'));
$fechaInicial= date_format($fechaInicial, 'Y-m-d');
##convertir a 01
$fechaInicial=substr($fechaInicial,0,8);
$fechaInicial.='01';
*/

$diasFinal = cal_days_in_month(CAL_GREGORIAN, $_POST['mesFinal'], $_POST['yearFinal']); // 31
$fechaFinal=$_POST['yearFinal'].'-'.$_POST['mesFinal'].'-'.$diasFinal;
###TERMINO CON EL RANGO DE FECHAS
                                         

                                        
#$date = strtotime(date('Y-m-d H:i:s') . ' +1 day');
#$date = strtotime(date('Y-m-d H:i:s') . ' +1 week');
#$date = strtotime(date('Y-m-d H:i:s') . ' +2 week');
#$date = strtotime(date('Y-m-d H:i:s') . ' +1 month');
#$date = strtotime(date('Y-m-d H:i:s') . ' -120 days');
#$date = strtotime(date('Y-m-d H:i:s') . ' +1 year');

/*$fecha29 = strtotime(date('Y-m-d') . ' -29 days');                                          
$fecha30 = strtotime(date('Y-m-d') . ' -30 days');                                          
$fecha60 = strtotime(date('Y-m-d') . ' -60 days');                                         
$fecha90 = strtotime(date('Y-m-d') . ' -90 days');                                   
$fecha120 = strtotime(date('Y-m-d') . ' -120 days');    */                                    
                                        
#$fechaInicio=$_POST['yearInicio'].'-'.$_POST['mesInicial'].'-01';
$fechaInicio=$myrowp['fechaApertura'];
#$fechaFinal=$fecha1;
                        



###FECHA 29<
$fecha29 = date_create($fecha1);
date_sub($fecha29, date_interval_create_from_date_string('29 days'));
$fecha29= date_format($fecha29, 'Y-m-d');
$fecha29=$_POST['yearFinal'].'-'.$_POST['mesFinal'].'-'.'01';
$fechaFin29=$_POST['yearFinal'].'-'.$_POST['mesFinal'].'-'.$diasNum;
###TERMINA FECHA 29


###FECHA 30-60

$fecha30 = date_create($fecha29);
date_sub($fecha30, date_interval_create_from_date_string('10 days'));
$fecha30= date_format($fecha30, 'Y-m-d');
$fecha30=substr($fecha30,0,8);
$fecha30.='01';
$mes30=substr($fecha30,5,2);
$year30=substr($fecha30,0,4);
$f30 = cal_days_in_month(CAL_GREGORIAN, $mes30, $year30); // 31
$fechaFin30=$year30.'-'.$mes30.'-'.$f30;
#la fecha final de este debe ser la fecha inicio  29-

###TERMINA FECHA30-60



####FECHA 60-90

$fecha60 = date_create($fecha30);
date_sub($fecha60, date_interval_create_from_date_string('10 days'));
$fecha60= date_format($fecha60, 'Y-m-d');
$fecha60=substr($fecha60,0,8);
$fecha60.='01';
$mes60=substr($fecha60,5,2);
$year60=substr($fecha60,0,4);
$f60 = cal_days_in_month(CAL_GREGORIAN, $mes60, $year60); // 31
$fechaFin60=$year60.'-'.$mes60.'-'.$f60;
###TERMINA FECHA 60-90



#######FECHA 90-120 #######
$fecha90 = date_create($fecha60);
date_sub($fecha90, date_interval_create_from_date_string('10 days'));
$fecha90= date_format($fecha90, 'Y-m-d');
$fecha90=substr($fecha90,0,8);
$fecha90.='01';
$mes90=substr($fecha90,5,2);
$year90=substr($fecha90,0,4);
$f90 = cal_days_in_month(CAL_GREGORIAN, $mes90, $year90); // 31
$fechaFin90=$year90.'-'.$mes90.'-'.$f90;
######TERMINA 90-120######



##########FECHA 120+#########

$fecha120 = date_create($fecha90);
date_sub($fecha120, date_interval_create_from_date_string('10 days'));
$fecha120= date_format($fecha120, 'Y-m-d');
$fecha120=substr($fecha120,0,8);
$fecha120.='01';
$mes120=substr($fecha120,5,2);
$year120=substr($fecha120,0,4);
$f120 = cal_days_in_month(CAL_GREGORIAN, $mes120, $year120); // 31
$fechaFin120=$year120.'-'.$mes120.'-'.$f120;
##########TERMINA120##########
                                        
                                        
                                        
















$query2 = $conn->prepare(  "select * from cxc_carteraVencida where entidad= :entidad 
                                        and
                                        fecha>= :fechaInicial 
                                        and
                                        fecha<= :fechaFinal
                                        and
                                        cargos>0
                                        and
                                        status!='done'
                                        group by clientePrincipal    
                                        order by descripcion ASC
                                        
                                        ");
                                        $query2->execute(array(":entidad" => $_SESSION['entidad'],":fechaInicial" => $fechaInicio,":fechaFinal" => $fechaFinal));
                                        while ($myrow = $query2->fetch()) {
                                            
                                            
                                        $query3 = $conn->prepare( "
                                        SELECT 
                                        nomCliente
                                        FROM
                                        clientes
                                        WHERE 
                                        entidad=:entidad
                                        and
                                        numCliente=:clientePrincipal
                                        ");
                                        $query3->execute(array(":entidad" => $_SESSION['entidad'],":clientePrincipal" => $myrow['clientePrincipal']));
                                        $myrow17 = $query3->fetch();  
                                        
                                        
                                        

#echo '<br>';echo '<br>';
#echo '120+';
#echo '<br>';
##OPERACIONES GLOBALES 120 dias y mas
$query4 = $conn->prepare("SELECT 
*
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and
(fecha>= :fechaInicio and fecha<= :fechaFinal)
and      
clientePrincipal= :clientePrincipal
and
abonos=0
group by referencia
  ");
#echo '<br>';echo '<br>';echo '<br>';
$query4->execute(array(":entidad" => $_SESSION['entidad'],":fechaInicio" => $fechaInicio,":fechaFinal" => $fechaFin120,":clientePrincipal" => $myrow['clientePrincipal']));  
  while($myrow120 = $query4->fetch()){
  $cargos120[0]+=$myrow120['cargos'];
  

$query4a = $conn->prepare("SELECT 
sum(abonos) as a 
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and    
abonos>0
and      
clientePrincipal=:clientePrincipal
    and
    referencia=:referencia
  ");
$query4a->execute(array(":entidad" => $_SESSION['entidad'],":referencia" => $myrow120['referencia'],":clientePrincipal" => $myrow['clientePrincipal']));   
  $myrow120d = $query4a->fetch();
  $abonos120[0]+=$myrow120d['a'];
  }
  
    
$i120[0]+=
$importe120=$cargos120[0]-$abonos120[0]; 
##CIERRO 120 DIAS y mas

                                       
    





#echo '<br>';echo '<br>';
#echo '90 y 120';
#echo '<br>';
##OPERACIONES ENTRE 90 y 120 dias 
$query5 = $conn->prepare("SELECT 
*
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and
(fecha>=:fechaInicio and fecha<=:fechaFinal)
and      
clientePrincipal=:clientePrincipal
and
abonos=0
group by referencia
  ");
#  echo '<br>';echo '<br>';echo '<br>';
  $query5->execute(array(":entidad" => $_SESSION['entidad'],":fechaInicio" => $fecha90,":fechaFinal" => $fechaFin90,":clientePrincipal" => $myrow['clientePrincipal']));  
  while($myrow90 = $query5->fetch()){
  $cargos90[0]+=$myrow90['cargos'];
  
  
$query5a = $conn->prepare("SELECT 
sum(abonos) as a 
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and    
referencia=:referencia
and      
clientePrincipal=:clientePrincipal
    and
    abonos>0
 
  ");
 $query5a->execute(array(":entidad" => $_SESSION['entidad'],":referencia" => $myrow90['referencia'],":clientePrincipal" => $myrow['clientePrincipal']));  
  $myrow90d =$query5a->fetch();   
  $abonos90[0]+=$myrow90d['a'];
  }
  
    
$i90[0]+=$cargos90[0]-$abonos90[0]; 
$importe90=$cargos90[0]-$abonos90[0]; 
##CIERRO ENTRE 90 DIAS y 120
















#echo '<br>';echo '<br>';
#echo '60 y 90';
#echo '<br>';
##OPERACIONES ENTRE 60 y 90 dias 
$query6 = $conn->prepare("SELECT 
* 
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and
(fecha>=:fechaInicio and fecha<=:fechaFinal)
and      
clientePrincipal=:clientePrincipal
and
abonos=0
group by referencia
  ");
# echo '<br>';echo '<br>';echo '<br>';
$query6->execute(array(":entidad" => $_SESSION['entidad'],":fechaInicio" => $fecha60,":fechaFinal" => $fechaFin60,":clientePrincipal" => $myrow['clientePrincipal']));  
  while($myrow60 = $query6->fetch()){
  $cargos60[0]+=$myrow60['cargos'];
  
  
$query6a = $conn->prepare("SELECT 
sum(abonos) as a 
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and    

clientePrincipal=:clientePrincipal
    and
    referencia=:referencia and abonos>0 "
        );
 
$query6a->execute(array(":entidad" => $_SESSION['entidad'],":referencia" => $myrow60['referencia'],":clientePrincipal" => $myrow['clientePrincipal']));  
  $myrow60d = $query6a->fetch();      
  $abonos60[0]+=$myrow60d['a'];
  }
  
  
    
$i60[0]+=$cargos60[0]-$abonos60[0]; 
$importe60=$cargos60[0]-$abonos60[0]; 
##CIERRO ENTRE 60 DIAS y 90

          
                                        
                                        
                                        
        




##OPERACIONES ENTRE 30 y 60 dias 

#echo '<br>';echo '<br>';
#echo '30 y 60';
#echo '<br>';
$query7 = $conn->prepare("SELECT 
*
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and
(fecha>=:fechaInicio and fecha<=:fechaFinal)
and      
clientePrincipal=:clientePrincipal
and
abonos=0
group by referencia
  ");
#echo '<br>';echo '<br>';echo '<br>';
 
$query7->execute(array(":entidad" => $_SESSION['entidad'],":fechaInicio" => $fecha30,":fechaFinal" => $fechaFin30,":clientePrincipal" => $myrow['clientePrincipal']));
  while($myrow30 = $query7->fetch()){
  $cargos30[0]+=$myrow30['cargos'];
  
  
$query7a = $conn->prepare("SELECT 
sum(abonos) as a 
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and    
 
clientePrincipal=:clientePrincipal
    and
    referencia=:referencia
        and
        abonos>0
  ");
 $query7a->execute(array(":entidad" => $_SESSION['entidad'],":referencia" => $myrow30['referencia'],":clientePrincipal" => $myrow['clientePrincipal'])); 
  $myrow30d = $query7a->fetch();  
  $abonos30[0]+=$myrow30d['a'];
  }
  
  
    
$i30[0]+=$cargos30[0]-$abonos30[0];
$importe30=$cargos30[0]-$abonos30[0]; 
##CIERRO ENTRE 30 DIAS y 60

                                     








###01
##OPERACIONES ENTRE hoy y 29 dias 

#echo '<br>';echo '<br>';
#echo '29 - dias';
#echo '<br>';
$query8 = $conn->prepare("SELECT 
* 
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and
(fecha>=:fechaInicio and fecha<=:fechaFinal)
and      
clientePrincipal=:clientePrincipal
and
abonos=0
group by referencia
  ");

#echo '<br>';echo '<br>';

$query8->execute(array(":entidad" => $_SESSION['entidad'],":fechaInicio" => $fecha29,":fechaFinal" => $fechaFinal,":clientePrincipal" => $myrow['clientePrincipal']));
  while($myrow29 = $query8->fetch()){
  $cargos29[0]+=$myrow29['cargos'];
  
  
$query8a = $conn->prepare("SELECT 
sum(abonos) as a 
  FROM 
cxc_carteraVencida
  WHERE
entidad=:entidad
and    
   
clientePrincipal=:clientePrincipal
    and
    referencia=:referencia
        and
        abonos>0
  ");
 $query8a->execute(array(":entidad" => $_SESSION['entidad'],":referencia" => $myrow29['referencia'],":clientePrincipal" => $myrow['clientePrincipal']));  
  $myrow29d = $query8a->fetch(); 
  $abonos29[0]+=$myrow29d['a'];
  }
  
  
    
$i29[0]+=$cargos29[0]-$abonos29[0]; 
$importe29=$cargos29[0]-$abonos29[0]; 
##CIERRO ENTRE hoy y 29 dias
                                        
                                            ?>                                  <tr>
											<td><?php echo $myrow17['nomCliente']; ?></td>
                                                                                        <td>
<?php if($importe29>0){ ?>                
<a  href="javascript:nueva('../ventanas/saldosVencidos.php?fechaInicial=<?php echo $fecha29; ?>&fechaFinal=<?php echo $fechaFinal; ?>&nombre=<?php echo $myrow17['nomCliente']; ?>&numCliente=<?php echo $myrow['clientePrincipal']; ?>&seguro=<?php echo $myrow17['numCliente']; ?>&nombreCliente=<?php echo $myrow17['nomCliente']; ?>&dias=29','ventana1','900','800','yes')">
                <?php
                echo '$' . number_format($importe29, 2);
                ?>
</a>
<?php }else{
    echo '$' . number_format($importe29, 2);
    
}   ?>                                                                                              
                                                                                            
                                                                                        </td>
                                                                                        
                                                                                        
											<td>
                                                                                        <?php if($importe30>0){ ?>                
<a  href="javascript:nueva('../ventanas/saldosVencidos.php?fechaInicial=<?php echo $fecha30; ?>&fechaFinal=<?php echo $fechaFin30; ?>&nombre=<?php echo $myrow17['nomCliente']; ?>&numCliente=<?php echo $myrow['clientePrincipal']; ?>&seguro=<?php echo $myrow17['numCliente']; ?>&nombreCliente=<?php echo $myrow17['nomCliente']; ?>&dias=30','ventana1','900','800','yes')">                
                <?php
                echo '$' . number_format($importe30, 2);
                ?></a>
            <?php }else{
    echo '$' . number_format($importe30, 2);
    
}   ?>  
                                                                                        </td>
                                                                                        
                                                                                        
                                                                                        
											<td>
<?php if($importe60>0){ ?>                
<a  href="javascript:nueva('../ventanas/saldosVencidos.php?fechaInicial=<?php echo $fecha60; ?>&fechaFinal=<?php echo $fechaFin60; ?>&nombre=<?php echo $myrow17['nomCliente']; ?>&numCliente=<?php echo $myrow['clientePrincipal']; ?>&seguro=<?php echo $myrow17['numCliente']; ?>&nombreCliente=<?php echo $myrow17['nomCliente']; ?>&dias=60','ventana1','900','800','yes')">                
                <?php
                echo '$' . number_format($importe60, 2);
                ?></a>
            <?php }else{
    echo '$' . number_format($importe60, 2);
    
}   ?>                                                                                            
                                                                                        </td>
											
                                                                                        
                                                                                        <td>
<?php if($importe90>0){ ?>                
<a  href="javascript:nueva('../ventanas/saldosVencidos.php?fechaInicial=<?php echo $fecha90; ?>&fechaFinal=<?php echo $fechaFin90; ?>&nombre=<?php echo $myrow17['nomCliente']; ?>&numCliente=<?php echo $myrow['clientePrincipal']; ?>&seguro=<?php echo $myrow17['numCliente']; ?>&nombreCliente=<?php echo $myrow17['nomCliente']; ?>&dias=90','ventana1','900','800','yes')">                
                <?php
                echo '$' . number_format($importe90, 2);
                ?></a>
            <?php }else{
    echo '$' . number_format($importe90, 2);
    
}   ?>                                                                                          
                                                                                        </td>
                                                                                        
                                                                                        
                                                                                        
                                                                                        <td>
<?php if($importe120>0){ ?>                
<a  href="javascript:nueva('../ventanas/saldosVencidos.php?fechaInicial=<?php echo $fechaInicio; ?>&fechaFinal=<?php echo $fechaFin120; ?>&nombre=<?php echo $myrow17['nomCliente']; ?>&numCliente=<?php echo $myrow['clientePrincipal']; ?>&seguro=<?php echo $myrow17['numCliente']; ?>&nombreCliente=<?php echo $myrow17['nomCliente']; ?>&dias=120','ventana1','900','800','yes')">                
<?php
echo '$' . number_format($importe120, 2);
?></a>
<?php }else{
echo '$' . number_format($importe120, 2);

}   ?>  
                                                                                        </td>
											<td>
<?php $totales[0]+=importe29+$importe30+$importe60+$importe90+$importe120;
            $totalf=$importe29+$importe30+$importe60+$importe90+$importe120;
            echo '$' . number_format($totalf, 2); ?>                                                                                        
                                                                                        </td>
										</tr>		
                                        <?php
                                        
                                        
                                        
 $cargos120[0]=null;$abonos120[0]=null;
    $cargos90[0]=null;$abonos90[0]=null; 
    $cargos60[0]=null;$abonos60[0]=null; 
    $cargos30[0]=null;$abonos30[0]=null; 
    
    $cargos29[0]=null;
    $abonos29[0]=null;
    
    $importe29Dias[0]=NULL;                                         
} ?>
                                                                                
<tr>
  
    <td >TOTAL</td>  

    <td  ><?php
        echo '$' . number_format($i29[0], 2);
        ?></td> 
    <td  ><?php
        echo '$' . number_format($i30[0], 2);
        ?></td> 
    <td  ><?php
        echo '$' . number_format($i60[0], 2);
        ?></td> 
    <td  ><?php
        echo'$' . number_format($i90[0], 2);
        ?></td> 
    <td  ><?php
        echo '$' . number_format($i120[0], 2);
        ?></td> 
 
    <td ><?php echo '$' . number_format($totales[0], 2); ?></td>
</tr>                                                                                
                                                                                
                                                                                
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
					
					</div>
				</div>
            
              </form>
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