jQuery(function($){
	$('.date-picker').datepicker({
		autoclose: true,
		todayHighlight: true
	})
	//show datepicker when clicking on the icon
	.next().on(ace.click_event, function(){
		$(this).prev().focus();
	});

	if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
	 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
	 	icons: {
			time: 'fa fa-clock-o',
			date: 'fa fa-calendar',
			up: 'fa fa-chevron-up',
			down: 'fa fa-chevron-down',
			previous: 'fa fa-chevron-left',
			next: 'fa fa-chevron-right',
			today: 'fa fa-arrows ',
			clear: 'fa fa-trash',
			close: 'fa fa-times'
		}
	}).next().on(ace.click_event, function(){
		$(this).prev().focus();
	});

	$('#timepicker1').timepicker({
		minuteStep: 1,
		showSeconds: true,
		showMeridian: false,
		disableFocus: true,
		icons: {
			up: 'fa fa-chevron-up',
			down: 'fa fa-chevron-down'
		}
	}).on('focus', function() {
		$('#timepicker1').timepicker('showWidget');
	}).next().on(ace.click_event, function(){
		$(this).prev().focus();
	});

	//or change it into a date range picker
	$('.input-daterange').datepicker({
		autoclose:true,
		format: 'yyyy-mm-dd'
	});


	//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
	$('input[name=date-range-picker]').daterangepicker({
		'applyClass' : 'btn-sm btn-success',
		'cancelClass' : 'btn-sm btn-default',
		locale: {
			applyLabel: 'Apply',
			cancelLabel: 'Cancel',
			format: 'yyyy-mm-dd'
		}
	})
	.prev().on(ace.click_event, function(){
		$(this).next().focus();
	});

	function showErrorAlert (reason, detail) {
	    var msg='';
	    if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
	    else {
	        //console.log("error uploading file", reason, detail);
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
		
		$('#content').css({'height':winHeight - offset.top - 10, 'max-height': 'none'});
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

	function saveposting(){
		var startdate 	= $('#startdate').val();
		var enddate 	= $('#enddate').val();
		var judul 		= $('#title').val();
		var konten 		= $('#content').html();

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		    }
		});

		$.ajax({
            type        : 'POST',
            dataType    : 'json',
            url         : '/posts/store',
            data: { 
                startdate	: startdate, 
                enddate   	: enddate,
                judul     	: judul,
                konten   	: konten
            },

            success: function(result){
            	if(result.message == 'Success'){
            		bootbox.dialog({
	                    message: "<span class='bigger-110'>Sukses Menambahkan Postingan</span>",
	                    buttons:
	                    {
	                        "OK" :
	                         {
	                                "label" : "<i class='icon-ok'></i> OK ",
	                                "className" : "btn-sm btn-danger",
	                        }
	                    }
	                });
            	}else{
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

            },error:function(result) {
           		console.log(JSON.parse(result.message));
           	}
        });
	};

});