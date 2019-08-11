if(js.data != null){

    $('#nama').val(js.data.name);
    $('#birthplace').val(js.data.birthplace);
    $('#birthdate').val(js.data.birthdate);
    $('#address').val(js.data.address);
    $('#nik').val(js.data.nik);
    $('#type').val(js.data.type);
    $('#phone').val(js.data.phone);
    $('#startdate').val(js.data.startdate);
    $('#enddate').val(js.data.enddate);
    $("input[type=radio][value=" + js.data.gender + "]").attr('checked', 'checked');
};

$('.date-picker').datepicker({
	autoclose: true,
	todayHighlight: true
})
//show datepicker when clicking on the icon
.next().on(ace.click_event, function(){
	$(this).prev().focus();
});

$('.input-daterange').datepicker({
        autoclose:true,
        format: 'yyyy-mm-dd',
    });

$('input[name=date-range-picker]').daterangepicker({
	'applyClass' : 'btn-sm btn-success',
	'cancelClass' : 'btn-sm btn-default',
	locale: {
		applyLabel: 'Apply',
		cancelLabel: 'Cancel',
	}
})
.prev().on(ace.click_event, function(){
	$(this).next().focus();
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#photo').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$('#profilephoto').click(function(){ $('#imgInp').trigger('click'); });

$("#imgInp").change(function(){
    readURL(this);
});


$('#submitstaff').click(function(){
    
    if(js.data){
        $('#id').val(js.data.id);
        $('#staff_nip').val(js.data.staff_nip);
    }
    
    var nama       	= $('#nama').val();
    var birthplace 	= $('#birthplace').val();
    var birthdate  	= $('#birthdate').val();
    var address    	= $('#address').val();
    var nik        	= $('#nik').val();
    var phone      	= $('#phone').val();
    var type       	= $('#type').val();
    var gender      = $('#gender').val();
    
    var err_nama		= validation(document.getElementById("nama"));
    var err_birthplace	= validation(document.getElementById("birthplace"));
    var err_birthdate	= validation(document.getElementById("birthdate"));
    var err_address		= validation(document.getElementById("address"));
    var err_nik			= validation(document.getElementById("nik"));
    var err_phone		= validation(document.getElementById("phone"));
    var err_type		= validation(document.getElementById("type"));
 
    var valid = !(err_nama||err_birthplace||err_birthdate||err_address||err_nik||err_phone||err_type);
    if(valid){
        submitstaff();
    }

});

$('[nama="formstaff"]').keyup(function(){
    validation(this);
});

$('[nama="formstaff"]').change(function(){
    validation(this);
});

function validation(item){
   switch (item.id){
		case'nama'			: return ceknull(item); break;
		case'birthplace'	: return ceknull(item); break;
		case'birthdate'		: return ceknull(item); break;
		case'address'		: return ceknull(item); break;
		case'nik'			: return ceknull(item); break;
		case'phone'			: return ceknull(item); break;
		case'type'			: return ceknull(item); break;
		case'gender'	    : return ceknull(item); break;

    }
}

function ceknull(item){
	if(item.type == 'radio'){
		if(($('input[type="radio"]:checked').length == 0)){
			tiperror(item,true,'Silahkan Isi Form yang Tersedia');
        	return true;
		}else{
			tiperror(item,false,null);
        	return false;
		}
	}else{
	    if(item.value){
	        tiperror(item,false,null);
	        return false;
	    }else{
	        tiperror(item,true,'Silahkan Isi Form yang Tersedia');
	        return true;
	    }
	}
}

function tiperror(item,error,msg){
    if(error){
        if(item.type == 'select-one'){
            $(item).parent().parent().parent().removeClass('has-error');
            $(item).parent().parent().siblings('span').remove();
            $(item).parent().parent().parent().addClass('has-error');
            $(item).parent().parent().parent().append('<span class="help-block col-xs-12 col-sm-reset inline" style="padding-left:12px">'+msg+'</span>');
        }else if(item.type == 'radio'){
        	$(item).parent().parent().parent().parent().parent().removeClass('has-error');
            $(item).parent().siblings('span').remove();
        	$(item).parent().parent().parent().parent().parent().addClass('has-error');
        	$(item).parent().parent().append('<span class="help-block col-xs-12 col-sm-reset inline">'+msg+'</span>');
        }else{
            $(item).parent().parent().parent().removeClass('has-error');
            $(item).siblings('i').remove();
            $(item).parent().parent().siblings('span').remove();
            $(item).parent().parent().parent().addClass('has-error');
            $(item).parent().append('<i class="ace-icon fa fa-times-circle" style="padding:7px 2px;"></i>');
            $(item).parent().parent().parent().append('<span class="help-block col-xs-12 col-sm-reset inline" style="padding-left:12px">'+msg+'</span>');
        }
    }else{
        if(item.type == 'select-one'){

            $(item).parent().parent().parent().removeClass('has-error');
            $(item).parent().parent().siblings('span').remove();

        }else if(item.type == 'radio'){

        	$(item).parent().parent().parent().parent().parent().removeClass('has-error');
        	$(item).parent().siblings('span').remove();

        }else{

            $(item).parent().parent().parent().removeClass('has-error');
            $(item).siblings('i').remove();
            $(item).parent().parent().siblings('span').remove();
        }
    }
}

function submitstaff(){
    var id          = js.data ? js.data.id : 1;
	var nama       	= $('#nama').val();
	var birthplace 	= $('#birthplace').val();
	var birthdate  	= $('#birthdate').val();
	var address    	= $('#address').val();
	var nik        	= $('#nik').val();
	var phone      	= $('#phone').val();
    var type        = $('#type').val();
    var photo       = $('#imgInp').val();
    var startdate   = $('#startdate').val();
	var enddate  	= $('#enddate').val();
	var gender 		= $('input[type="radio"]:checked').val();
    var formData    = new FormData(document.getElementById("formstaff"));
    var jenis       = 'staff';
    var txt;

    if(js.data){
        id  = js.data.id;
    }else{
        id  = null;
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type        : 'POST',
        dataType    : 'json',
        contentType : false,
        processData : false,
        url         : '/actor/store',
        data        : formData,

        success: function(result){
            if(id != null){
                txt = 'Mengedit';
            }else{
                txt = 'Menambahkan';
            }
            if(result.info == 'OK'){
                bootbox.dialog({
                    message: "<span class='bigger-110'>Sukses "+txt+" Staff</span>",
                    buttons:
                    {
                        "OK" :
                         {
                                "label" : "<i class='icon-ok'></i> OK ",
                                "className" : "btn-sm btn-danger",
                                "callback": function() {
                                    window.location.replace("/subject");
                                }
                        }
                    }
                });
            }else{
                bootbox.dialog({
                    message: "<span class='bigger-110'>Gagal "+txt+" Staff</span>",
                    buttons:
                    {
                        "OK" :
                         {
                                "label" : "<i class='icon-ok'></i> OK ",
                                "className" : "btn-sm btn-danger",
                        }
                    }
                });
            }

        },error:function(result) {
            bootbox.dialog({
                message: "<span class='bigger-110'>Gagal "+txt+" Staff</span>",
                buttons:
                {
                    "OK" :
                     {
                            "label" : "<i class='icon-ok'></i> OK ",
                            "className" : "btn-sm btn-danger",
                    }
                }
            });
        }
    });
}