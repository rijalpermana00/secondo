@extends('layout')

@section('content')
<style>
</style>
<a href="/subject/create" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;Add Post</a>
<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>
<div class="table-responsive">  
    <table id="listsubject" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Kode Mapel</th>
                <th>Nama Mapel</th>
                <th>Tingkat</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>
<script src="/js/managesubject.js" type="text/javascript"></script>
@endsection
