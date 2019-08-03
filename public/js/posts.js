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
                    { 'mDataProp': 'link' },
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
	window.location.replace("/posts/createpost");
})