@extends('layout')

@section('content')
<br>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
       <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="mapel">Pelajaran:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="mapel" placeholder="Mata Pelajaran">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="codemapel">Kode Mapel:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="codemapel" placeholder="Kode Pelajaran">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Tingkat:</label>
                <div class="col-sm-2">
                    <select id="level" style="width: 100%;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <label class="control-label col-sm-2" for="pwd">Jumlah SKS:</label>
                <div class="col-sm-2">
                    <select id="grade" style="width: 100%;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4 pull-right">
                    <button id="submitmapel" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form> 
    </div>
</div>
<script src="/js/editorpage.js" type="text/javascript">
</script>
@endsection
