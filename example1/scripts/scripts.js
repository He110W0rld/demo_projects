function showDeliveryType(t) {
	$("#delivery-variants").children().hide();
	$('.delivery-form').show();
	$('.'+$(t).attr('id')).show();
}

function toggleSelector(t) {
	var parent = $(t).parent();
	if (parent.find('ul').length == 1) {
		parent.find('ul').toggle();
	}
	else {
		parent.toggle();
		parent.parent().find('div').html($(t).html())
	}
}

function selectColor(t) {
	$(t).parent().parent().find('span').hide();
	$(t).find('span').show();
	$("#color").html($(t).attr('title'));
}

function checkForm() {
	var arr = {};

	var item = $("#item").val();
	var color = $("#color").val();
	var fullName = $("#full-name").val();
	var phone = $("#phone").val();
	var email = $("#email").val();
	var ipsum = $("#ipsum").val();
	var additional = $("#additional").val();
	var latin = $("#latin").find('input:checked').val();
	var cbox = $("#cbox").is(":checked");
	var deliveryType = $("#delivery-type").find('input:checked').val();
	arr = {"item": item, "color": color, "fullName": fullName, "phone": phone, "email": email, "ipsum": ipsum, 
	"additional": additional, "latin": latin, "cbox": cbox, "deliveryType": deliveryType};
	if (deliveryType == 'pickup') {
		var deliveryPoint = $("#delivery-point").find('option:selected').val();
		if (deliveryPoint == 0) {
			deliveryPoint = "";
		}
		arr.deliveryPoint = deliveryPoint;
	}
	else {
		var tmpArray = {};
		var street = $("#street").val();
		var house = $("#house").val();
		var entrance = $("#entrance").val();
		var doorphone = $("#doorphone").val();
		var floor = $("#floor").val();
		var apartament = $("#apartament").val();
		var building = $("#building").val();
		tmpArray = {"street": street, "house": house, "entrance": entrance, "doorphone": doorphone, "floor": floor, 
		"apartament": apartament, "building":building};
		arr = jQuery.extend(tmpArray, arr);
	}
	$.ajax({
		type: "POST",
		url: "core/api.php",
		data: 
		{ 
			"action": "order",
			"data": arr
		},
		dataType: "JSON"							
	}).done(function(result) {
		if (result.response == 1) {
			alert('Форма отправлена!');
		}
		else {
			alert('Ошибка отправки формы!');
		}
	})


}