loadtable();

$('#submitmapel').click(function(){
    var mapel         = $('#mapel').val();
    var codemapel     = $('#codemapel').val();
    var level         = $('#level').val();
    var grade         = $('#grade').val();
    
    var err_mapel     = validation(document.getElementById("mapel"));
    var err_codemapel = validation(document.getElementById("codemapel"));
    var err_level     = validation(document.getElementById("level"));
    var err_grade     = validation(document.getElementById("grade"));
 
    var valid = !(err_mapel || err_codemapel || err_level || err_grade);
    if(valid){
        savesubject();
    }

});

function loadtable(){

    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	    }
	});
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/subject/get',
        
        success : function(result){

            var dt = $('#listsubject').DataTable( {
                bDestroy: true,
                bAutoWidth : false,
                bJQueryUI: false,
                aaData: result['data'],
                aoColumns: [
                    { 'mDataProp': 'name' },
                    { 'mDataProp': 'code' },
                    { 'mDataProp': 'grade' },
                    { 'mDataProp': 'credit' },
                    { 'mDataProp': function getdetail(data, type, row) {
                    		var foo;
                            foo =  '<div class="hidden-sm hidden-xs action-buttons">'+
                                        '<a href="#" class="btn btn-success btn-xs" onClick="editsubject(\''+data.id+'\')">'+
                                            '<span title="Detail Permintaan">'+
                                                '<i class="ace-icon fa fa-pencil bigger-110 icon-only"></i>'+
                                            '</span>'+
                                        '</a>'+
	                                    '<a href="#" class="btn btn-danger btn-xs" onClick="deletesubject(\''+data.id+'\')">'+
                                            '<span title="Detail Permintaan">'+
                                                '<i class="ace-icon fa fa-remove bigger-110 icon-only"></i>'+
                                            '</span>'+
                                        '</a>'+
                                    '</div>'+
                                    '<div class="hidden-md hidden-lg">'+
                                        '<div class="inline pos-rel">'+
                                            '<a href="#" class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">'+
                                                '<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>'+
                                            '</a>'+
                                            
                                            '<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">'+
                                                '<li>'+
                                                    '<a href="#" class="tooltip-success" onClick="editsubject(\''+data.id+'\')">'+
                                                        '<span title="Detail Permintaan">'+
                                                            '<i class="ace-icon fa fa-pencil green bigger-110 icon-only"></i>'+
                                                        '</span>'+
                                                    '</a>'+
                                                '</li>'+

                                                '<li>'+
                                                    '<a href="#" class="tooltip-success" onClick="deletesubject(\''+data.id+'\')">'+
                                                        '<span title="Detail Permintaan">'+
                                                            '<i class="ace-icon fa fa-remove red bigger-110 icon-only"></i>'+
                                                        '</span>'+
                                                    '</a>'+
                                                '</li>'+
                                            '</ul>'+
                                        '</div>'+
                                    '</div>';

	                    	return foo;
	                	}
       				},
                ],

                aaSorting: [[0, 'asc']],

                order: [[1, 'asc']],

             });
        },
        
        error: function(xhr) {
          
            if(xhr.status != 200){
                bootbox.dialog({
                    message: "<span class='bigger-110'>"+xhr.status+"-"+xhr.statusText+"<br>Silahkan coba kembali</span>",
                    buttons:
                    {
                            "OK" :
                            {
                                    "label" : "<i class='icon-ok'></i> OK ",
                                    "className" : "btn-sm btn-danger",
                                    callback : function(){
                                                
                                    }
                            }
                    }
                });
            }
        }
    });
}

$('#newsubject').on('click', function(){
	window.location.replace("/subject/create");
})

function opensubject(id){
    window.location.replace("/subject/"+id+"/get");
}

function editsubject(id){
	$.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/subject/get',
        data : {
            id : id,
        },
        
        success : function(result){

            $('#subject_id').val(result.data.id);
            $('#mapel').val(result.data.name);
            $('#codemapel').val(result.data.code);
            $('#level').val(result.data.grade);
            $('#grade').val(result.data.credit);
            $('#myModal').modal('show');
        },
        
        error: function(xhr) {
          
            if(xhr.status != 200){
                bootbox.dialog({
                    message: "<span class='bigger-110'>"+xhr.status+"-"+xhr.statusText+"<br>Silahkan coba kembali</span>",
                    buttons:
                    {
                            "OK" :
                            {
                                    "label" : "<i class='icon-ok'></i> OK ",
                                    "className" : "btn-sm btn-danger",
                                    callback : function(){
                                                
                                    }
                            }
                    }
                });
            }
        }
    });
}

function savesubject(){
    var mapel       = $('#mapel').val();
    var codemapel   = $('#codemapel').val();
    var level       = $('#level').val();
    var grade       = $('#grade').val();
    var id          = $('#subject_id').val();
    
    if(id){
        id  = id;
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
        url         : '/subject/store',
        data: { 
            id      : id, 
            name    : mapel,
            code    : codemapel,
            grade   : level,
            credit  : grade,
        },

        success: function(result){
            var txt;
            if(id != null){
                txt = 'Mengedit';
            }else{
                txt = 'Menambahkan';
            }
            if(result.info == 'OK'){
                bootbox.dialog({
                    message: "<span class='bigger-110'>Sukses "+txt+" Pelajaran</span>",
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
                    message: "<span class='bigger-110'>Gagal "+txt+" Pelajaran</span>",
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
                message: "<span class='bigger-110'>Gagal Menambahkan Pelajaran</span>",
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
};

function deletesubject(id){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/subject/destroy',
        data:{
            id : id,
        },
        
        success : function(result){
            if(result.code == 0){
                bootbox.dialog({
                    message: "<span class='bigger-110'>Data berhasil dihapus</span>",
                    buttons:
                    {
                        "OK" :
                        {
                                "label" : "<i class='icon-ok'></i> OK ",
                                "className" : "btn-sm btn-success",
                                callback : function(){
                                    location.reload();  
                                }
                        }
                    }
                });
            }else{
                 bootbox.dialog({
                    message: "<span class='bigger-110'>Data gagal dihapus karena: "+result.info+"</span>",
                    buttons:
                    {
                        "OK" :
                        {
                                "label" : "<i class='icon-ok'></i> OK ",
                                "className" : "btn-sm btn-danger",
                                callback : function(){
                                            
                                }
                        }
                    }
                });
            }
        },
        
        error: function(xhr) {
          
            if(xhr.status != 200){
                bootbox.dialog({
                    message: "<span class='bigger-110'>"+xhr.status+"-"+xhr.statusText+"<br>Silahkan coba kembali</span>",
                    buttons:
                    {
                            "OK" :
                            {
                                    "label" : "<i class='icon-ok'></i> OK ",
                                    "className" : "btn-sm btn-danger",
                                    callback : function(){
                                                
                                    }
                            }
                    }
                });
            }
        }
    });
}

$('[name="formsubject"]').keyup(function(){
    validation(this);
});

$('[name="formsubject"]').change(function(){
    validation(this);
});

function validation(item){
   switch (item.id){

      case 'mapel'      : return ceknull(item); break;

      case 'codemapel'  : return ceknull(item); break;

      case 'level'      : return ceknull(item); break;

      case 'grade'      : return ceknull(item); break;

    }
}

function ceknull(item){
    if(item.value){
        tiperror(item,false,null);
        return false;
    }else{
        tiperror(item,true,'Silahkan Isi Form yang Tersedia');
        return true;
    }
}

function tiperror(item,error,msg){
    if(error){
        if(item.type == 'select-one'){
            $(item).parent().parent().parent().removeClass('has-error');
            $(item).parent().parent().siblings('span').remove();
            $(item).parent().parent().parent().addClass('has-error');
            $(item).parent().parent().parent().append('<span class="help-block col-xs-12 col-sm-reset inline" style="padding-top:7px">'+msg+'</span>');
        }else{
            $(item).parent().parent().parent().removeClass('has-error');
            $(item).siblings('i').remove();
            $(item).parent().parent().siblings('span').remove();
            $(item).parent().parent().parent().addClass('has-error');
            $(item).parent().append('<i class="ace-icon fa fa-times-circle" style="padding:7px 2px;"></i>');
            $(item).parent().parent().parent().append('<span class="help-block col-xs-12 col-sm-reset inline" style="padding-top:7px">'+msg+'</span>');
        }
    }else{
        if(item.type == 'select-one'){

            $(item).parent().parent().parent().removeClass('has-error');
            $(item).parent().parent().siblings('span').remove();

        }else{

            $(item).parent().parent().parent().removeClass('has-error');
            $(item).siblings('i').remove();
            $(item).parent().parent().siblings('span').remove();
        }
    }
}
