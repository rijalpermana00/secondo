jQuery(function($){

	function showErrorAlert (reason, detail) {
	    var msg='';
	    if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
	    else {
	        //console.log("error uploading file", reason, detail);
	    }
	    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
	     '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}

	$('#editor1').ace_wysiwyg({
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

	$('[data-toggle="buttons"] .btn').on('click', function(e){
	    var target = $(this).find('input[type=radio]');
	    var which = parseInt(target.val());
	    var toolbar = $('#editor1').prev().get(0);
	    if(which >= 1 && which <= 4) {
	        toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
	        if(which == 1) $(toolbar).addClass('wysiwyg-style1');
	        else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
	        if(which == 4) {
	            $(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
	        } else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
	    }
	});

});