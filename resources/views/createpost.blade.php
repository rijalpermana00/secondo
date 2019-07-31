@extends('layout')

@section('content')
    <br>
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
            <div class="row">
                <div class="form-group">
                    <h3 class="col-xs-5 control-label " for="ringkasan">Judul</h3>
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <input type="text" class="form-control" id="contactpersonname" name="Nama Kontak" placeholder="Judul Postingan" style="height: 32px;"/>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <h3 class="col-xs-5 control-label " for="ringkasan"> Konten</h3>
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="wysiwyg-editor" id="editor1" contenteditable="true"></div>
                    </div>
                </div>  
            </div>
            <div class="widget-toolbox padding-4 clearfix">
                <div class="btn-group pull-right">
                    <button class="btn btn-md btn-success">
                        <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                        save
                    </button>
                </div>

                <div class="btn-group pull-right">
                    <button class="btn btn-md btn-danger">
                        <i class="ace-icon fa fa-times bigger-125"></i>
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/editingpage.js" type="text/javascript"></script>
@endsection
