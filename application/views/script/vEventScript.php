<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
$('#createEventForm').submit(function(e){
	alert('asdasd');
	//createEvent($(this).serialize());
	return false;
});

function createEvent(){
	$.ajax({
		url: 'cEvent/createEvent',
		type: 'post',
		data: {"event_name":$('input[name="event_name"]').val()},
		success: function(responseData){
			console.log(responseData);
		}
	});
}
</script>