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
        var posts = '<div class="col-sm-3 col-md-3 col-xs-12">'+
                        '<div class="boxes-15">'+
                            '<div class="thumbnail">'+
                                '<img src="/assets/images/gallery/image-1.jpg" class="img-responsive" alt="Mengenalkan Sains dan Profesi pada Anak">'+
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