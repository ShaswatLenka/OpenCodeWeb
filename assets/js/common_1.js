

jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deletePost", function(){
		var postId = $(this).data("postid"),
			hitURL = baseURL + "deletePost",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this Post ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { postId : postId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Post successfully deleted"); }
				else if(data.status = false) { alert("Post deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});
