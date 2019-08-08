loadposts();
loadotherposts();

function loadposts(){
    
    var data    = js.maindata;
    var title   = data.title;
    var tanggal = data.created_at;
    var content = data.content;
    $('#title').html(title);
    $('#create_date').html(tanggal);
    $('#content').html(content);

}

function loadotherposts(){

    var otherdata = js.otherdata;
    var i;
    var counter;
    for(i=(otherdata.length-1); i >= otherdata.length-4; i--){
        var thumbnail = otherdata[i]["link"] ? otherdata[i]["link"] : "/assets/images/default.png";
        var posts = '<div class="col-sm-3 col-md-3 col-xs-12">'+
                        '<div class="boxes-15">'+
                            '<div class="thumbnail" style="max-height:151px; max-width:261px; display: flex; overflow:hidden;">'+
                                '<a href="/posts/'+otherdata[i]["id"]+'/get">'+
                                    '<img src='+thumbnail+' class="img-responsive" style="width:100%; height: 100%; max-height:100%; object-fit: cover;">'+
                                '</a>'+
                            '</div>'+
                            '<div class="caption">'+
                                '<h5>'+
                                    '<a href="#" onClick="getpost((\''+otherdata[i]["id"]+'\'))">'+otherdata[i]["title"]+'</a>'+
                                '</h5>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
        $('#otherposts').append(posts);
    }
}

function getpost(id){
    console.log(id);
    window.location.replace("/posts/"+id+"/get");
}