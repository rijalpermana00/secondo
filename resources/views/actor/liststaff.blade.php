@extends('layout')

@section('content')
<style>
</style>
<a href="/actor/formstaff" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;Add Staff</a>
<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>
<div class="table-responsive">  
    <table id="liststaff" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama Staff</th>
                <th>NIP</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Tanggal Mulai</th>
                <th>phone</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>

<script src="/js/actor/managestaff.js" type="text/javascript"></script>
@endsection