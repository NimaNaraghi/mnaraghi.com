$(document).ready(function(){
	//$('.alert-danger').hide();
	$(document).on('click','.update-attr-btn',function(){						
		var element = $(this).prev('select');
		var id = element.attr('data-id');
		var attribute = $(this).attr('data-attr');
		var value = element.val();
		var url = element.attr('artwork-update-attr');
		var buttonElement = $(this);
		$.post(url,{'id':id,'attribute':attribute,'value':value },function(result){
			//location.reload();
			buttonElement.addClass('btn-success').removeClass('btn-danger').fadeOut('slow');
			buttonElement.fadeIn('slow',function(){
				buttonElement.addClass('btn-danger').removeClass('btn-success')
			});



		},'json').fail(function(result){
			var msg = result.responseJSON.message;
			alert(msg);
		});
		
	});
});