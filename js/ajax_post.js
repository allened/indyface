/* Contains

 */


/* Example*/
function example(id)
{
	$.ajax({
				type: "POST",
				url: "/ajax_post/update_present",
				dataType: "json",
				data: "attendence_id="+id,
				cache:false,
				success: 
					function(data){
						document.getElementById('present' + id).className = data.message_class;
					}
				
				});
}

