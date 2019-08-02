@extends('layout')

@section('content')
    <br>
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
            <div class="row">
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-xs-6 center">
                        <label class="red">Judul</label>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" class="form-control" id="title" name="Nama Kontak" placeholder="Judul Postingan" style="height: 32px;"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 center">

                        <label>Periode</label>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-daterange input-group">
                                    <input type="text" class="input-sm form-control" id="startdate" placeholder="Start Date" name="start" data-date-format="yyyy-mm-dd" />

                                    <span class="input-group-addon">
                                        <i class="fa fa-exchange"></i>
                                    </span>

                                    <input type="text" class="input-sm form-control" id="enddate" placeholder="End Date" name="end" data-date-format="yyyy-mm-dd"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>  
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <label>Konten</label>
                        <div class="wysiwyg-editor" id="content" contenteditable="true"></div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-group pull-right">
                            <span class="btn btn-md btn-success" id="saveposting">
                                <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                save
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/editingpage.js" type="text/javascript"></script>
@endsection
