@extends('layout')

@section('content') 
<div class="page-header">
    <h1>
        Form Staff
    </h1>
</div>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form class="form-horizontal" id="formstaff">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="staff_nip" id="staff_nip">
                                <input type="hidden" name="id" id="id">
                                <input type="hidden" name="jenis" id="jenis" value="staff">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="nama">Nama:</label>
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" class="form-control input-lg " nama="formstaff" id="nama" name="nama" placeholder="Nama">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="birthplace">Tempat Lahir:</label>
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" class="form-control input-lg " nama="formstaff" id="birthplace" name="birthplace" placeholder="Tempat Lahir">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="birthdate">Tanggal Lahir:</label>
                                    <span class="block input-icon input-icon-right">
                                        <input class="form-control input-lg date-picker" name="birthdate" nama="formstaff" id="birthdate" type="text" data-date-format="yyyy-mm-dd">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="pwd">Nomor Telepon:</label>
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" name="phone" class="form-control input-lg" nama="formstaff" id="phone">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="pwd">Tipe:</label>
                                    <span class="block input-icon input-icon-right">
                                        <select nama="formstaff" id="type" name="type" class="form-control input-lg" style="width: 100%;">
                                            <option value="">Pilih</option>
                                            <option value="kontrak">Kontrak</option>
                                            <option value="tetap">Tetap</option>
                                            <option value="intern">Internship</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="address">Alamat:</label>
                                    <span class="block input-icon input-icon-right">
                                        <input type="textarea" class="form-control input-lg" nama="formstaff" id="address" name="address">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="pwd">Gender:</label>
                                    <span class="block input-icon input-icon-right">
                                        <div class="col-xs-12 col-sm-9 no-padding-left">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="pria" nama="formstaff" id="gender">Pria
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="wanita" nama="formstaff" id="gender">Wanita
                                            </label>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="pwd">NIK:</label>
                                    <span class="block input-icon input-icon-right">
                                        <input type="text" name="nik" class="form-control input-lg" nama="formstaff" id="nik">
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label">Panjang kontrak:</label>
                                    <span class="block input-icon input-icon-right">
                                        <div class="input-daterange input-group">
                                            <input type="text" class="input-sm form-control input-lg" nama="formstaff" id="startdate" name="startdate" data-date-format="yyyy-mm-dd">
                                            <span class="input-group-addon">
                                                <i class="fa fa-exchange"></i>
                                            </span>

                                            <input type="text" class="input-sm form-control input-lg" nama="formstaff" id="enddate" name="enddate" data-date-format="yyyy-mm-dd">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <label class="control-label" for="nama">Photo:</label>
                                    <span class="block input-icon input-icon-right">
                                        <span class="profile-picture" id="profilephoto" style="display: flex; max-height: 300px; width:100%;">
                                            <img id="photo" src="/assets/images/default.png"/>
                                        </span>
                                        <br>
                                        <input type='file'  name="formstaff" id="imgInp" style="display: none;" />
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span id="submitstaff" class="btn btn-default pull-right">Submit</span>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/actor/formstaff.js" type="text/javascript"></script>
@endsection