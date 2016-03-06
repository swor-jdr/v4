head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {
		e.preventDefault();
		var hack = new Date();
		$('#fltl').load('app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()) + ' #fltl > *', function(data) {
			console.log(data);
		});

		if (!$('#script-fltl')) {
			$('body').append('<script id="script-fltl"></script>')
		}

		$('#script-fltl').load('app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()) + ' #script-fltl', function(data) {
			console.log(data);
		});
	});
});