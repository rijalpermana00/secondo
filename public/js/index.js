loadposts();

function loadposts(){

    $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		    }
		});
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/posts/show',
        
        success : function(result){
            var data = result.data;
            var i;
            for(i=(data.length-1); i >= data.length-4; i--){

                var posts = '<div class="col-sm-3 col-md-3 col-xs-12">'+
                                '<div class="boxes-15">'+
                                    '<div class="thumbnail">'+
                                        '<img src="/assets/images/gallery/image-1.jpg" class="img-responsive" alt="Mengenalkan Sains dan Profesi pada Anak">'+
                                    '</div>'+
                                    '<div class="caption">'+
                                        '<h5>'+
                                            '<a href="#" onClick="getpost((\''+data[i]["id"]+'\'))">'+data[i]["title"]+'</a>'+
                                        '</h5>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
                $('#posts').append(posts);
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

function getpost(id){
    console.log(id);
    window.location.replace("/posts/"+id+"/get");
}