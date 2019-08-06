loadtable();

function loadtable(){

    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	    }
	});
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/posts/getpost',
        
        success : function(result){

            var dt = $('#listpost').DataTable( {
                bDestroy: true,
                bAutoWidth : false,
                bJQueryUI: false,
                aaData: result['data'],
                aoColumns: [
                    { 'mDataProp': 'title' },
                    { 'mDataProp': 'content' },
                    { 'mDataProp': 'create_date' },
                    { 'mDataProp': 'end_date' },
                    { 'mDataProp': function getdetail(data, type, row) {
                    		var foo;
	                        foo = '<center><a href="#" class="btn btn-success btn-xs" onClick="editposts(\''+data.id+'\')"><span title="Detail Permintaan"><i class="ace-icon fa fa-search bigger-110 icon-only"></i></span></a>&nbsp';
	                        foo += '<a href="#" class="btn btn-danger btn-xs" onClick="deleteposts(\''+data.id+'\')"><span title="Detail Permintaan"><i class="ace-icon fa fa-remove bigger-110 icon-only"></i></span></a><center>';
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

$('#newposts').on('click', function(){
	window.location.replace("/posts/create");
})

function editposts(id){
	window.location.replace("/posts/"+id+"/edit");
}

function deleteposts(id){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/posts/destroy',
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