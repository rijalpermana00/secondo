loadtable();

function loadtable(){

    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	    }
	});
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/actor/get',
        data : {
            type : 'staff',
        },
        
        success : function(result){

            var dt = $('#liststaff').DataTable( {
                bDestroy: true,
                bAutoWidth : false,
                bJQueryUI: false,
                aaData: result['data'],
                aoColumns: [
                    { 'mDataProp': 'name' },
                    { 'mDataProp': 'nip' },
                    { 'mDataProp': 'nik' },
                    { 'mDataProp': 'address' },
                    { 'mDataProp': 'startdate' },
                    { 'mDataProp': 'phone' },
                    { 'mDataProp': function getdetail(data, type, row) {
                    		var foo;
                            foo =  '<div class="hidden-sm hidden-xs action-buttons">'+
                                        '<a href="#" class="btn btn-success btn-xs" onClick="editstaff(\''+data.id+'\')">'+
                                            '<span title="Detail Permintaan">'+
                                                '<i class="ace-icon fa fa-pencil bigger-110 icon-only"></i>'+
                                            '</span>'+
                                        '</a>'+
	                                    '<a href="#" class="btn btn-danger btn-xs" onClick="deletestaff(\''+data.id+'\')">'+
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
                                                    '<a href="#" class="tooltip-success" onClick="editstaff(\''+data.id+'\')">'+
                                                        '<span title="Detail Permintaan">'+
                                                            '<i class="ace-icon fa fa-pencil green bigger-110 icon-only"></i>'+
                                                        '</span>'+
                                                    '</a>'+
                                                '</li>'+

                                                '<li>'+
                                                    '<a href="#" class="tooltip-success" onClick="deletestaff(\''+data.id+'\')">'+
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

$('#newstaff').on('click', function(){
    window.location.replace("/actor/create");
})

function editstaff(id){
    window.location.replace("/actor/"+id+"/editstaff");
}


function deletestaff(id){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/actor/destroy',
        data:{
            id : id,
            type: 'staff'
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