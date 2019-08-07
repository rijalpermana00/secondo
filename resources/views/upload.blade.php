@extends('layout')

@section('content')
	<div class="row">
		<div class="container">
 
			<h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
 
				<form id="uploadimage" method="POST" enctype="multipart/form-data">
 
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" id="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input id="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
	<script src="/js/uploadfiles.js" type="text/javascript">
    </script>
@endsection