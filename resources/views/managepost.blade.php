@extends('layout')

@section('content')
<form class="form-horizontal" role="form">
    <div class="form-group">
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
    </div>
</form>
<script src="/js/managepost.js" type="text/javascript"></script>
@endsection
