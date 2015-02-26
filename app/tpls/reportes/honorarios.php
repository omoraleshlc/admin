<div class="panel panel-default" ng-controller="honorariosCtrl">
	<div class="panel-heading">
		<h3 class="panel-title">Honorarios Médicos</h3>
		
		<div class="panel-options">
			
			<a href="" data-toggle="panel">
				<span class="collapse-icon">–</span>
				<span class="expand-icon">+</span>
			</a>
			
			<a href="" data-toggle="reload">
				<i class="fa-rotate-right"></i>
			</a>
			
			<a href="" data-toggle="remove">
				×
			</a>
		</div>
	</div>
	<div class="panel-body">
		<form method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="full_name">Fecha Inicial</label>
						<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="birthdate">Fecha Final</label>
						<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="full_name">Nombre del Médico</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-6">
					<div class="form-group">
						<button type="submit" class="btn btn-turquoise"><span class="fa-search"></span> Buscar</button>
					</div>
				</div>
			</div>
		</form>

		<hr>

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
				</tbody>
			</table>
		
		</div>

	</div>
</div>

<script>
	
	function honorariosCtrl($scope, $http){
		$scope.url = 'getHonorarios.php';

		$scope.getHonorarios = function(){
			
		}

	}

</script>

<script type="text/javascript">
	// This JavaScript Will Replace Checkboxes in dropdown toggles
	jQuery(document).ready(function($){
		setTimeout(function()
		{
			$(".checkbox-row input").addClass('cbr');
			cbr_replace();
		}, 0);
	});

	// Init Responsive Table
	;(function($)
	{
		$('.table-responsive').responsiveTable();
	})(jQuery);
</script>