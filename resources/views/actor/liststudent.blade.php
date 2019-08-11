@extends('layout')

@section('content')
<style>
</style>
<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;Add Subject</a>
<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>
<div class="table-responsive">  
    <table id="listsubject" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama Mapel</th>
                <th>Kode Mapel</th>
                <th>Tingkat</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Form Pelajaran</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" id="subject_id">
                        <form class="form-horizontal" id="formsubject">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 control-label" for="mapel">Pelajaran:</label>
                                <div class="col-xs-12 col-sm-6">
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" class="form-control " id="mapel" name="formsubject" placeholder="Mata Pelajaran">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 control-label" for="codemapel">Kode Mapel:</label>
                                <div class="col-xs-12 col-sm-6">
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" class="form-control " id="codemapel" name="formsubject" placeholder="Kode Pelajaran">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 control-label" for="pwd">Tingkat:</label>
                                <div class="col-xs-12 col-sm-6">
                                    <span class="block input-icon input-icon-right">
                                        <select id="level" name="formsubject" class="" style="width: 100%;">
                                            <option value="">Pilih</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 control-label" for="pwd">Jumlah SKS:</label>
                                <div class="col-xs-12 col-sm-6">
                                    <span class="block input-icon input-icon-right">
                                        <select id="grade" name="formsubject" class="" style="width: 100%;">
                                            <option value="">Pilih</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <span id="submitmapel" type="submit" class="btn btn-default">Submit</span>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/actor/managesubject.js" type="text/javascript"></script>
@endsection
