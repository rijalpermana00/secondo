@extends('layout')

@section('content')
<style type="text/css">
    #maincontainer{
        width: 750px;
    }
    img{
        width: 100%;
        height: 100%;
    }
    html{
        width: 100%;
    }
    body {
        width: 100%;
        overflow-x: hidden;
        max-height: 100%;
    }
</style>
<br>
<div class="row" style="min-height: 500px">
    <div id="maincontainer" class="container">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <b><h1 class="widget-title lighter bold" id="title"></h1></b>
                <h6 id="create_date"></h6>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="row">
                        <p id="content">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="page-header text-center">
            <h2><a href="/posts/">Berita Lainnya</a></h2>
        </div>
        <div id="otherposts">
        </div>
    </div>
</div>
<script src="/js/loadnews.js" type="text/javascript"></script>
@endsection
