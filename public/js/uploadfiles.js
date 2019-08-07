$('#Upload').on('click',function(){
	uploadpdf();
})

function uploadpdf(){
    // showload('uploaddoc-modal-body');
    var formData = new FormData(document.getElementById("uploadimage"));
    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	    }
	});
    $.ajax({
        url: '/files/store',
        type: 'POST',
        data:formData,
        contentType: false,
        processData: false,
        success: function(result){
            // hideload('uploaddoc-modal-body');
            results = result['data'];
            if(result['code'] == 0){
                bootbox.dialog({
                    message: "<span class='bigger-110'>"+result['data']+"</span>",
                    buttons:
                    {
                        "OK" :
                         {
                            "label" : "<i class='fa fa-check'></i> OK ",
                            "className" : "btn-sm btn-danger",
                            callback : function(){
                                // $('#modal_upload_doc').modal('hide');
                                // loadfile();
                            }
                        }
                    }
                });
            }else{
                bootbox.dialog({
                    message: "<span class='bigger-110'>" + result['info'] +"</span>",
                    buttons:
                    {
                        "OK" :
                         {
                            "label" : "<i class='fa fa-check'></i> OK ",
                            "className" : "btn-sm btn-danger",
                            callback : function(){
                                       
                            }
                        }
                    }
                });
            }
        },
        error: function(xhr) {
            // hideload('uploaddoc-modal-body');
            if(xhr.status != 200){
                bootbox.dialog({
                    message: "<span class='bigger-110'>"+xhr.status+"-"+xhr.statusText+"<br>Silahkan coba kembali</span>",
                    buttons:
                    {
                        "OK" :
                         {
                            "label" : "<i class='fa fa-check'></i> OK ",
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
