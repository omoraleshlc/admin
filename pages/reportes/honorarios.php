<?php require_once("../../session_check.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("../layouts/head.php"); ?>
</head>

<body class="page-body">
    
<script src="../js/scripts/autocomplete.js" type="text/javascript"></script>
	<link rel="stylesheet" href="../js/stylesheets/autocomplete.css" type="text/css" />    

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
                                        <label class="col-sm-3 control-label" for="field-1">Escoje el rango de fechas</label>

                                        <div class="col-sm-9">

                                            <input type="text" id="field-1" name="fechas" class="form-control daterange" />

                                        </div>
                                    </div>
                                    
                                    

                                    
                                    <div class="form-group">
                                        <button type="submit" name="enviarDatos" class="btn btn-blue">Validate</button>
                                        <button type="reset" class="btn btn-white">Reset</button>
                                    </div>
                                </form>                        
                            </div>
                        </div>

                        
                        
                        
                        
                        
                        
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Lista de Médicos</h3>
                                
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
                                
                                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                                
                                    <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th data-priority="1">Last Trade</th>
                                                <th data-priority="3">Trade Time</th>
                                                <th data-priority="1">Change</th>
                                                <th data-priority="3">Prev Close</th>
                                                <th data-priority="3">Open</th>
                                                <th data-priority="6">Bid</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>       
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>       
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>        
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>       
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>       
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>       
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>       
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>        
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>       
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>       
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>       
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>       
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>        
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>       
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>       
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>       
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>       
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>        
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>       
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>       
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>       
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>       
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>        
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>       
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>       
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
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
                </div>
                
                <?php require_once("../layouts/footer.php"); ?>
            </div>
	</div>
            
            <!-- Page Loading Overlay -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	
   <script>
		new Autocomplete("nomMedico", function() { 
			this.setValue = function( id ) {
				document.getElementsByName("medico")[0].value = id;
			}
			
			// If the user modified the text but doesn't select any new item, then clean the hidden value.
			if ( this.isModified )
				this.setValue("");
			
			// return ; will abort current request, mainly used for validation.
			// For example: require at least 1 char if this request is not fired by search icon click
			if ( this.value.length < 1 && this.isNotClick ) 
				return ;
			
			// Replace .html to .php to get dynamic results.
			// .html is just a sample for you
			return "../cargos/medicosCedulax.php?entidad=<?php echo $entidad;?>&q=" + this.value;
			// return "completeEmpName.php?q=" + this.value;
		});	
	</script>
    
    
    <?php require_once("../layouts/bottom.php"); ?>

</body>
</html>