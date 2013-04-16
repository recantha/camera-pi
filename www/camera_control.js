$(document).ready(function() {

var positions = {
	pan: 100,
	tilt: 100
}

moveServo('pan', positions['pan']);
moveServo('tilt', positions['tilt']);

$('.camera_control').click(function() {
	var $ctrl = $(this);
	var axis = $ctrl.attr('axis');
	var posn = positions[axis];
	var posn = posn + parseInt($ctrl.attr('increment'));

	moveServo(axis, posn);

	// Should be in a callback
	positions[axis] = parseInt(posn);
})

function moveServo(axis, position) {
	var theUrl = axis + '.php';
	var theUrl = theUrl + '?position=' + position;

	$.ajax({
		url: theUrl,
		success: function(resp) {
			console.log(axis + ' set to ' + position);
			console.log(resp);
		}
	})

	return false;
}
})
