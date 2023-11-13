/*
* Author 	: Expert coder
* Email 	: expertcoder10@gmail.com
* Subject 	: Autocomplete using PHP/MySQL and jQuery
*/
function autocomplet() {
	var keyword = $('#country_id').val();
	$.ajax({
		url: 'ajax_refresh.php',
		type: 'POST',
		data: {keyword:keyword},
		success:function(data){
			$('#country_list_id').show();
			$('#country_list_id').html(data);
		}
	});
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#country_id').val(item);
	// hide proposition list
	$('#country_list_id').hide();
}
