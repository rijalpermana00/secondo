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
                var thumbnail = data[i]["link"] ? data[i]["link"] : "/assets/images/default.png";
                var posts = '<div class="col-sm-3 col-md-3 col-xs-12">'+
                                '<div class="boxes-15">'+
                                    '<div class="thumbnail" style="max-height:151px; max-width:261px; display: flex; overflow:hidden;">'+
                                        '<a href="/posts/'+data[i]["id"]+'/get">'+
                                            '<img src='+thumbnail+' class="img-responsive" style="width:100%; height: 100%; max-height:100%; object-fit: cover;">'+
                                        '</a>'+
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