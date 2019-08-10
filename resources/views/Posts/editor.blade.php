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
                            
                            <span class="btn btn-md btn-danger" id="cancelposting">
                                <i class="ace-icon fa fa-remove bigger-125"></i>
                                Cancel
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/posts/editorpage.js" type="text/javascript">
    </script>
@endsection
