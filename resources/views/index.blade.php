@extends('layout')

@section('content') 

<div class="page-header">
	<h1>
		Dashboard
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			overview &amp; stats
		</small>
	</h1>
</div>

<div class="row">
	<div class="col-xs-3">
		<div class="panel panel-primary">
			<div class="panel-body">
				<h1 class="bigger center"><b>1,255</b></h1>
			</div>
			<div class="panel-heading">
				<h4 class="bigger center"><b>Jumlah Posts</b></h4>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-danger">
			<div class="panel-body">
				<h1 class="bigger center"><b>1,255</b></h1>
			</div>
			<div class="panel-heading">
				<h4 class="bigger center"><b>Jumlah Users</b></h4>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-success">
			<div class="panel-body">
				<h1 class="bigger center"><b>1,255</b></h1>
			</div>
			<div class="panel-heading">
				<h4 class="bigger center"><b>Jumlah Staff</b></h4>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-warning">
			<div class="panel-body">
				<h1 class="bigger center"><b>1,255</b></h1>
			</div>
			<div class="panel-heading">
				<h4 class="bigger center"><b>Jumlah Jumlah Siswa</b></h4>
			</div>
		</div>
	</div>
</div>	

<div class="row">
	<div class="col-sm-9">
		<div class="space"></div>

		<div id="calendar"></div>
	</div>
	<div class="col-sm-3">
		<div class="widget-box transparent">
			<div class="widget-header">
				<h4>Draggable events</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main no-padding">
					<div id="external-events">
						<div class="external-event label-grey" data-class="label-grey">
							<i class="ace-icon fa fa-arrows"></i>
							My Event 1
						</div>

						<div class="external-event label-success" data-class="label-success">
							<i class="ace-icon fa fa-arrows"></i>
							My Event 2
						</div>

						<div class="external-event label-danger" data-class="label-danger">
							<i class="ace-icon fa fa-arrows"></i>
							My Event 3
						</div>

						<div class="external-event label-purple" data-class="label-purple">
							<i class="ace-icon fa fa-arrows"></i>
							My Event 4
						</div>

						<div class="external-event label-yellow" data-class="label-yellow">
							<i class="ace-icon fa fa-arrows"></i>
							My Event 5
						</div>

						<div class="external-event label-pink" data-class="label-pink">
							<i class="ace-icon fa fa-arrows"></i>
							My Event 6
						</div>

						<div class="external-event label-info" data-class="label-info">
							<i class="ace-icon fa fa-arrows"></i>
							My Event 7
						</div>

						<label>
							<input type="checkbox" class="ace ace-checkbox" id="drop-remove" />
							<span class="lbl"> Remove after drop</span>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/js/main.js" type="text/javascript">
</script>
@endsection('content') 
