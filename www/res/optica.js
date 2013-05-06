// Defaults and globals
var default_positions = {
	pan: 195,
	tilt: 80
}

var positions = {
	pan: default_positions['pan'],
	tilt: default_positions['tilt']
}

var min_positions = {
	pan: 140,
	tilt: 50
}

var max_positions = {
	pan: 250,
	tilt: 200
}

// Concurrency checker
var camera_moving = 0;

// Functions
function startServod(_callback) {
	var theUrl = "activate_servod.php";

	$('#camera_controls').fadeTo('fast', 0.1, function() {
		// Call the start-up script but give it a short timeout as it always times out...
		$.ajax({
			url: theUrl,
			timeout: 500,
			success: function() {
			},
			complete: function() {
				_callback();
				$('#camera_controls').fadeTo('fast', 1);
			}
		});
	});

}

function setPosition(axis, position) {
	positions[axis] = position;
}

function moveServo(axis, position, _callback) {
	if ((position >= min_positions[axis]) && (position <= max_positions[axis])) {
		var theUrl = axis + '.php';
		var theUrl = theUrl + '?position=' + position;

		$.ajax({
			url: theUrl,
			success: function(resp) {
				console.log(axis + ' set to ' + position);
				setPosition(axis, position);

				if (typeof _callback == 'function') {
					_callback();
				}
			}
		})
	} else {
		console.log('Hit ' + axis + ' axis limiter. Passed in ' + position + ', min ' + min_positions[axis] + ' max ' + max_positions[axis]);
		if (typeof _callback == 'function') {
			_callback();
		}
	}

	return false;
}

function incrementServo(axis, increment, _callback) {
	var posn = positions[axis];
	posn = posn + increment;
	moveServo(axis, posn, _callback);
}


function startupServos() {
	resetServos(function() {
		moveServo('pan', min_positions['pan'], function() {
			moveServo('pan', max_positions['pan'], function() {
				moveServo('tilt', min_positions['tilt'], function() {
					moveServo('tilt', max_positions['tilt'], function() {
						resetServos();
					})
				})
			})
		})
	})
}

function resetServos(_callback) {
	moveServo('pan', default_positions['pan'], function() {
		moveServo('tilt', default_positions['tilt'], _callback);
	});
}

function takePhoto() {
	var params = $('#camera_params').serialize();
	console.log(params);
	var theUrl = '/take_photo.php?' + params
	console.log(theUrl);

	$('#snapshot_message').html('Please wait...');

	$('#snapshot').fadeTo('fast', 0.1, function() {

	$.ajax({
		url: theUrl,
		success: function(resp) {
			var imgUrl = $.trim($('input[name="output"]').val());
			$('#snapshot').off().on('load', function() {
				$(this).fadeTo('fast', 1);
				$('#snapshot_message').html('');
			})
			var ts = Math.floor(+new Date() / 1000);
			$('#snapshot').attr('src', $('input[name="output"]').val() + '?ts='+ts);
		}
	})

	})
}

$(document).ready(function() {
	// Set pan/tilt to default positions
	$('#snapshot').on('load', function() {
		startServod(function() {
			startupServos();
		})
	})

	$('.camera_control').click(function() {
		// Prevents moving whilst it's being moved
		if (camera_moving == 0) {
			camera_moving = 1;

			var $ctrl = $(this);
			var axis = $ctrl.attr('axis');

			var incr = parseInt($ctrl.attr('increment'));
			incrementServo(axis, incr, function() {
				camera_moving = 0;
			});
		}
	})

	$('#camera_reset').click(function() {
		startServod(function() {
			resetServos();
		})
	})	

	$('#servod_start').click(function() {
		startServod();
	})

	$('#take_photo').click(function() {
		takePhoto();
	})
})

