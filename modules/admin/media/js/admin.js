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


	$(document).on('click','.post-link',function(e){
		var url = $(this).attr('href');
		var data = $(this).data();
		e.preventDefault();
		$.post(url,data,function(result){
			newElement = $(result).find('.carousel-list').html();
			//console.log(newElement);
			$('.carousel-list').html(newElement);
			$('.sortable').sortable();
			//Similar function has been added to pluginOptions in server side to handle normal functionality
			$('.sortable').sortable().bind('sortupdate', function(e, ui) {
				var dataIdArray = {};
	    		var i = 0;

	    		$(".sortable").children("li").each(function(){
	    			
	    			dataIdArray[i++] = $(this).children("a").data("id");
	    			
	    		});
				
				$.post($("sortable").data("url"),{orders: dataIdArray,action: "Sort"}, function(result){
	    				//console.log(result);
	    		});
			});
		}).fail(function(result){
			console.log(result);	
			$("#error-modal").find(".modal-body").html(result.responseText);
			$("#error-modal").modal();
		});
	});

});

