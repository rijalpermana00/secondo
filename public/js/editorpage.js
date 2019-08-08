jQuery(function($){
	
	if(js.data != null){
		$('#title').val(js.data.title ? js.data.title : '');
		$('#content').html(js.data.content ? js.data.content : '');
		$('#startdate').val(js.data.create_date ? js.data.create_date : '');
		$('#enddate').val(js.data.end_date ? js.data.end_date : '');
	}

	$('.input-daterange').datepicker({
		autoclose:true,
		format: 'yyyy-mm-dd'
	});

	function showErrorAlert (reason, detail) {
	    var msg='';
	    if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
	    else {
	        console.log("error uploading file", reason, detail);
	    }
	    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
	     '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}

	$('#content').ace_wysiwyg({
	    toolbar:
	    [
	        'font',
	        null,
	        'fontSize',
	        null,
	        {name:'bold', className:'btn-info'},
	        {name:'italic', className:'btn-info'},
	        {name:'strikethrough', className:'btn-info'},
	        {name:'underline', className:'btn-info'},
	        null,
	        {name:'insertunorderedlist', className:'btn-success'},
	        {name:'insertorderedlist', className:'btn-success'},
	        {name:'outdent', className:'btn-purple'},
	        {name:'indent', className:'btn-purple'},
	        null,
	        {name:'justifyleft', className:'btn-primary'},
	        {name:'justifycenter', className:'btn-primary'},
	        {name:'justifyright', className:'btn-primary'},
	        {name:'justifyfull', className:'btn-inverse'},
	        null,
	        {name:'createLink', className:'btn-pink'},
	        {name:'unlink', className:'btn-pink'},
	        null,
	        {name:'insertImage', className:'btn-success'},
	        null,
	        'foreColor',
	        null,
	        {name:'undo', className:'btn-grey'},
	        {name:'redo', className:'btn-grey'}
	    ],
	    'wysiwyg': {
	        fileUploadError: showErrorAlert
	    }
	}).prev().addClass('wysiwyg-style2');    


	//make the editor have all the available height
	$(window).on('resize.editor', function() {
		var offset = $('#content').parent().offset();
		var winHeight =  $(this).height();
		
		$('#content').css({'height':winHeight - offset.top - 150, 'max-height': 'none'});
	}).triggerHandler('resize.editor');
	

	$('[data-toggle="buttons"] .btn').on('click', function(e){
	    var target = $(this).find('input[type=radio]');
	    var which = parseInt(target.val());
	    var toolbar = $('#content').prev().get(0);
	    if(which >= 1 && which <= 4) {
	        toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
	        if(which == 1) $(toolbar).addClass('wysiwyg-style1');
	        else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
	        if(which == 4) {
	            $(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
	        } else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
	    }
	});

	$('#saveposting').on('click', function(){
		saveposting();
	});

	$('#cancelposting').on('click', function(){
		window.location.replace('/posts');
	});


	function saveposting(){
		var startdate 	= $('#startdate').val();
		var enddate 	= $('#enddate').val();
		var judul 		= $('#title').val();
		var konten 		= $('#content').html();
		var url 		= '/posts/store';
		var id;
		
		if(js.edit){
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
            url         : url,
            data: { 
                id			: id, 
                startdate	: startdate, 
                enddate   	: enddate,
                judul     	: judul,
                konten   	: konten
            },

            success: function(result){
            	var txt;
            	if(js.data != null){
            		txt = 'Mengedit';
            	}else{
            		txt = 'Menambahkan';
            	}
            	if(result.info == 'OK'){
            		bootbox.dialog({
	                    message: "<span class='bigger-110'>Sukses "+txt+" Postingan</span>",
	                    buttons:
	                    {
	                        "OK" :
	                         {
	                                "label" : "<i class='icon-ok'></i> OK ",
	                                "className" : "btn-sm btn-danger",
	                                "callback": function() {
	                					window.location.replace("/posts");
                                	}
	                        }
	                    }
	                });
            	}else{
            		bootbox.dialog({
	                    message: "<span class='bigger-110'>Gagal "+txt+" Postingan</span>",
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
                    message: "<span class='bigger-110'>Gagal Menambahkan Postingan</span>",
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
	
});