@extends('layout')

@section('content')
<style>
    table.dataTable th{
        width: 20%;
        max-width: 20%;
        word-break: break-all;
        white-space: pre-line;
    }
    table.dataTable td{
        width: 20%;
        max-width: 20%;
        word-break: break-all;
        white-space: pre-line;
    }
</style>
<a href="/posts/create" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;Add Post</a>
<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>
<div class="table-responsive">  
    <table id="listpost" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>
<script src="/js/managepost.js" type="text/javascript"></script>
@endsection
