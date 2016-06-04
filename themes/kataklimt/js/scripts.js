 
function updateViewCounter(data_id){
	var url = '/mnaraghi.com/web/site/update-counter';
	var csrf = $('meta[name=csrf-token]').attr('content');
	$.post(url,{'id':data_id,'_csrf': csrf },function(result){
		console.log(result);
	});
}

	