@extends('layout')

@section('content')
<style type="text/css">
    .container{
        width: 750px;
    }

    img {
      max-width: 100%;
      max-height: 100%;
    }
</style>
<br>
<div class="row" style="min-height: 500px">
    <div class="container">
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
